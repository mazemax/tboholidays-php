<?php
/**
 * User: M.Saad Siddiqui
 */

require '/vendor/autoload.php';
require 'webservice/autoload.php';

class TBOSOAPClient extends Zend\Soap\Client {
    public function _doRequest(Zend\Soap\Client\Common $client, $request, $location, $action, $version, $oneWay = null)
    {
        $namespace = "http://TekTravel/HotelBookingApi";
        $request = preg_replace('/<hot:(\w+)/', '<$1 xmlns="'.$namespace.'"', $request, 1);
        $request = preg_replace('/<hot:(\w+)/', '<$1', $request);
        $request = str_replace(array('/hot:', 'xmlns:hot="'.$namespace.'"'), array('/', ''), $request);

        return parent::_doRequest($client, $request, $location, $action, $version, $oneWay);
    }
}

// Create SOAPClient object
function createClient(){
    try {
        $client = new TBOSOAPClient("wsdl/hotelservice.wsdl");
        $client->setCompressionOptions(SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP);
        $client->setSoapVersion(SOAP_1_1);
        $client->setLocation("http://api.tbotechnology.in/HotelAPI_V7/HotelService.svc/basic");

        /* Travel Agent Credentials */
		$username = "abc_username";
		$password = "abc_password";
		/* Travel Agent Credentials */
		
		$namespace      = "http://TekTravel/HotelBookingApi";
        $auth           = "<hot:Credentials UserName='$username' Password='$password'></hot:Credentials>";
        $Credentials    = new SoapVar($auth, XSD_ANYXML);
        $authenticate   = new SoapHeader($namespace, 'Credentials', $Credentials, false);
        $client->addSoapInputHeader($authenticate);
        return $client;
    }
    catch (SoapFault $s) {
        //var_dump($s);
        echo 'ERROR: SOAPFault - [' . $s->faultcode . '] ' . $s->faultstring;
    }
    catch (Exception $e) {
        echo 'ERROR: Exception - ' . $e->getMessage();
    }
}

// Get complete country list
function getCountryList($client){
    $CountryListRequest = new CountryListRequest();
    $result = $client->CountryList($CountryListRequest);
    return $result;
}

// Get city list for provided country code
function getCityList($client){
    $DestinationCityListRequest = new DestinationCityListRequest('AE');
    $result = $client->DestinationCityList($DestinationCityListRequest);
    return $result;
}

// Fetch Dubai hotels (1 Room – 1 Adult)
function getHotels($client){
    $CheckInDate = new DateTime(date('Y-m-d', strtotime(' +2 day')));
    $CheckOutDate = new DateTime(date('Y-m-d', strtotime(' +3 day')));
    $CountryName = "United Arab Emirates";
    $CityName = "Dubai";
    $CityId = "25921";
    $IsNearBySearchAllowed = true;
    $NoOfRooms = 1;
    $GuestNationality = "SA";
    $RoomGuests = array( new RoomGuest(1, 0) );
    $PreferredCurrencyCode = "SAR";
    $ResultCount = 100;

    $HotelSearchRequest = new HotelSearchRequest($CheckInDate, $CheckOutDate, $CountryName, $CityName, $CityId, $IsNearBySearchAllowed,
        $NoOfRooms, $GuestNationality, $RoomGuests, $PreferredCurrencyCode, $ResultCount, null);
    $result = $client->HotelSearch($HotelSearchRequest);
    return $result;
}
