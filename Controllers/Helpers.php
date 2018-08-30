<?
class Helpers {
  public function getAgeFromDate ($date) {
    return $age = date_diff(date_create($date), date_create('now'))->y;
  }
}