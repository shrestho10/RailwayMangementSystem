<?php



class Info{

    private $_ID;
    private $_Name;
   


    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }


    public function setName( $Name ) {
        $this->_Name = $Name;
    }

    public function getName() {
        return $this->_Name;
    }

}


class Station{

    private $_StationID;
    private $_StationName;
    private $_Route;
    private $_RoutePos;
   


    public function setStationID ( $ID ) {
        $this->_StationID = $ID;
    }

    public function getStationID () {
        return $this->_StationID;
    }


    public function setStationName( $Name ) {
        $this->_StationName = $Name;
    }

    public function getStationName() {
        return $this->_StationName;
    }

    public function setRoute ( $Route ) {
        $this->_Route = $Route;
    }

    public function getRoute () {
        return $this->_Route;
    }

    public function setRoutePos ( $RoutePos ) {
        $this->_RoutePos = $RoutePos;
    }

    public function getRoutePos () {
        return $this->_RoutePos;
    }

}




class Train{

    private $_TrainID;
    private $_TrainName;
    private $_RouteID;
   


    public function setTrainID ( $ID ) {
        $this->_TrainID = $ID;
    }

    public function getTrainID () {
        return $this->_TrainID;
    }


    public function setTrainName( $Name ) {
        $this->_TrainName = $Name;
    }

    public function getTrainName() {
        return $this->_TrainName;
    }



    public function setRouteID ( $ID ) {
        $this->_RouteID = $ID;
    }

    public function getRouteID () {
        return $this->_RouteID;
    }

}



class Schedule{

    private $_TrainID;
    private $_ID;
    private $_TrainName;
    private $_Station;
    private $_Date;
    private $_TimeIn;
    private $_TimeOut;
   


    public function setTrainID ( $ID ) {
        $this->_TrainID = $ID;
    }

    public function getTrainID () {
        return $this->_TrainID;
    }


    public function setID ( $ID ) {
        $this->_ID = $ID;
    }

    public function getID () {
        return $this->_ID;
    }


    public function setTrainName( $Name ) {
        $this->_TrainName = $Name;
    }

    public function getTrainName() {
        return $this->_TrainName;
    }

    public function setRouteID ( $ID ) {
        $this->_RouteID = $ID;
    }

    public function getRouteID () {
        return $this->_RouteID;
    }

    public function setStation( $Station ) {
        $this->_Station = $Station;
    }

    public function getStation() {
        return $this->_Station;
    }

    public function setDate( $Date ) {
        $this->_Date = $Date;
    }

    public function getDate() {
        return $this->_Date;
    }

    public function setTimeIn( $TimeIn ) {
        $this->_TimeIn = $TimeIn;
    }

    public function getTimeIn() {
        return $this->_TimeIn;
    }

     public function setTimeOut( $TimeOut ) {
        $this->_TimeOut = $TimeOut;
    }

    public function getTimeOut() {
        return $this->_TimeOut;
    }

}



class Route{

    private $_RouteID;
    private $_RouteName;
   


    public function setRouteID ( $ID ) {
        $this->_RouteID = $ID;
    }

    public function getRouteID () {
        return $this->_RouteID;
    }


    public function setRouteName( $Name ) {
        $this->_RouteName = $Name;
    }

    public function getRouteName() {
        return $this->_RouteName;
    }

}



class RouteStation{

    private $_StationID;
    private $_StationName;
    private $_RouteID;
    private $_RouteName;
    private $_StationPos;

   


    public function setStationID ( $ID ) {
        $this->_StationID = $ID;
    }

    public function getStationID () {
        return $this->_StationID;
    }


    public function setStationName( $Name ) {
        $this->_StationName = $Name;
    }

    public function getStationName() {
        return $this->_StationName;
    }

    public function setRouteID ( $RouteID ) {
        $this->_RouteID = $RouteID;
    }

    public function getRouteID () {
        return $this->_RouteID;
    }

    public function setRouteName( $Name ) {
        $this->_RouteName = $Name;
    }

    public function getRouteName() {
        return $this->_RouteName;
    }

    public function setStationPos ( $StationPos ) {
        $this->_StationPos = $StationPos;
    }

    public function getStationPos () {
        return $this->_StationPos;
    }

}



class SeatType{

    private $_SeatTypeID;
    private $_SeatTypeName;
    private $_SeatPerBogie;
    
   


    public function setSeatTypeID ( $ID ) {
        $this->_SeatTypeID = $ID;
    }

    public function getSeatTypeID () {
        return $this->_SeatTypeID;
    }


    public function setSeatTypeName( $Name ) {
        $this->_SeatTypeName = $Name;
    }

    public function getSeatTypeName() {
        return $this->_SeatTypeName;
    }

    public function setSeatPerBogie ( $Route ) {
        $this->_SeatsPerBogie = $Route;
    }

    public function getSeatPerBogie () {
        return $this->_SeatsPerBogie;
    }

   

}




class TrainDetails{

    private $_TrainID;
    private $_BogieType;
    private $_NoOfBogie;
    private $_SeatTypeNo;
   


    public function setTrainID ( $ID ) {
        $this->_TrainID = $ID;
    }

    public function getTrainID () {
        return $this->_TrainID;
    }


    public function setBogieType( $Name ) {
        $this->_BogieType = $Name;
    }

    public function getBogieType() {
        return $this->_BogieType;
    }


    public function setNoOfBogie ( $ID ) {
        $this->_NoOfBogie = $ID;
    }

    public function getNoOfBogie () {
        return $this->_NoOfBogie;
    }

    public function setSeatTypeNo ( $ID ) {
        $this->_SeatTypeNo = $ID;
    }

    public function getSeatTypeNo () {
        return $this->_SeatTypeNo;
    }

}




class CreateTicket{

    private $_TrainID;
    private $_Date;
   


    public function setTrainID ( $ID ) {
        $this->_TrainID = $ID;
    }

    public function getTrainID () {
        return $this->_TrainID;
    }


    public function setDate( $Name ) {
        $this->_Date = $Name;
    }

    public function getDate() {
        return $this->_Date;
    }

}
    



?>

