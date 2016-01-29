<?php 
namespace vkdate\Date;

class DateFunc
{

  


  public function __construct()
  {


  }


  public static function dateSpan($from)
  {
      
       $currentdate=date('d-m-Y H:i:s');
       $fromdate=date('d-m-Y H:i:s',strtotime($from));

        $diff=date_diff(date_create($currentdate),date_create($fromdate));

        //print_r($diff);

      return $diff;
  }


/**
  *
  * @Return string value in  full duration 
  */


  public function fullDuration($from)
  {
      $var = self::dateSpan($from);

      $duration='';

      switch (true) {

          case $var->y>0:
                switch (true) {
                    case $var->y==1:
                      $duration.=$var->y.' Year, ';
                    break;
                    default:
                      $duration.=$var->y.' Years, ';
                    break;
                  }
          //break;


          case $var->m>0:
                switch (true) {
                    case $var->m==1:
                      $duration.=$var->m.' Month, ';
                    break;
                    default:
                      $duration.=$var->m.' Months, ';
                    break;
                  }
         // break;


          case $var->d>0:
                switch (true) {
                    case $var->d==1:
                      $duration.=$var->d.' Day, ';
                    break;
                    default:
                      $duration.=$var->d.' Days, ';
                    break;
                  }
          //break;


          case $var->h>0:
                switch (true) {
                    case $var->h==1:
                      $duration.=$var->h.' Hour, ';
                    break;
                    default:
                      $duration.=$var->h.' Hours, ';
                    break;
                  }
         // break;

          case $var->m>0:
                switch (true) {
                    case $var->m==1:
                      $duration.=$var->m.' Minute, ';
                    break;
                    default:
                      $duration.=$var->m.' Minutes, ';
                    break;
                  }
        //  break;

          case $var->s>0:
                      $duration.=$var->s.' Seconds, ';
         // break;

       }

       $duration=trim(trim($duration),',');
      return $duration;
  }



/**
  *
  * @Return string value in  full duration 
  */


  public function shortDuration($from)
  {
      $var = self::dateSpan($from);

      $duration='';

      switch (true) {

          case $var->y>0:
                switch (true) {
                    case $var->y==1:
                      $duration.=$var->y.' Year, ';
                    break;
                    default:
                      $duration.=$var->y.' Years, ';
                    break;
                  }
          break;


          case $var->m>0:
                switch (true) {
                    case $var->m==1:
                      $duration.=$var->m.' Month, ';
                    break;
                    default:
                      $duration.=$var->m.' Months, ';
                    break;
                  }
          break;


          case $var->d>0:
                switch (true) {
                    case $var->d==1:
                      $duration.=$var->d.' Day, ';
                    break;
                    default:
                      $duration.=$var->d.' Days, ';
                    break;
                  }
          break;


          case $var->h>0:
                switch (true) {
                    case $var->h==1:
                      $duration.=$var->h.' Hour, ';
                    break;
                    default:
                      $duration.=$var->h.' Hours, ';
                    break;
                  }
          break;

          case $var->m>0:
                switch (true) {
                    case $var->m==1:
                      $duration.=$var->m.' Minute, ';
                    break;
                    default:
                      $duration.=$var->m.' Minutes, ';
                    break;
                  }
          break;

          case $var->s>0:
                      $duration.='Just Now';
          break;

       }

       $duration=trim(trim($duration),',');
      return $duration;
  }




/**
  *
  * @Return string value in  total days
  */


  public function inDays($from)
  {
      $var = self::dateSpan($from);

      switch (true) {
        case $var->days==1:
          $days=$var->days.' Day.';
          break;
        
        default:
          $days=$var->days.' Days.';
          break;
       }
      return $days;
  }


}