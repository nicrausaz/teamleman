<?
class Helpers {
  public function getAgeFromDate ($date) {
    return $age = date_diff(date_create($date), date_create('now'))->y;
  }
  public function formatDate ($date) {
    $convertedDate = new DateTime($date);
    return $convertedDate->format('j.m.Y');
  }
}