<?php

/**
 * Get City data from JSON file
 * @param  {String} [$city='los-angeles'] Slug of City Name
 * @return {Array}
 */
function getCityData($city = 'los-angeles') {
  $file = @file_get_contents("data/json/{$city}.json");
  if (!$file) throw new Exception("Unable to Load {$city}");

  $data = json_decode($file, true);
  if (!$data) throw new Exception("Unable to Parse {$city}");

  return $data;
}

/**
 * Return Percent Score to Letter Grade
 * @param  {String} $score Percent Score
 * @return {String}
 */
function getGrade($score) {
  $score = intval($score);

  if ($score < 65) {
    return 'F';
  } elseif ($score < 67 && $score >= 65) {
    return 'D';
  } elseif ($score < 70 && $score >= 67) {
    return 'D+';
  } elseif ($score < 74 && $score >= 70) {
    return 'C-';
  } elseif ($score < 77 && $score >= 74) {
    return 'C';
  } elseif ($score < 80 && $score >= 77) {
    return 'C+';
  } elseif ($score < 84 && $score >= 80) {
    return 'B-';
  } elseif ($score < 87 && $score >= 84) {
    return 'B';
  } elseif ($score < 90 && $score >= 87) {
    return 'B+';
  } elseif ($score < 94 && $score >= 90) {
    return 'A-';
  } elseif ($score < 97 && $score >= 94) {
    return 'A';
  } elseif ($score >= 97) {
    return 'A+';
  }
}

/**
 * Fetch Data and Sort Scorecard
 * @return {Array}
 */
function reportCard() {
  $file = @file_get_contents("data/json/_grades.json");
  if (!$file) throw new Exception("Unable to Load {$city}");

  $data = json_decode($file, true);
  if (!$data) throw new Exception("Unable to Parse {$city}");

  $keys = array_column($data, 'overall_score');
  array_multisort($keys, SORT_ASC, $data);

  return array_reverse($data);
}

/**
 * Output Template
 * @param  {String} $template Text to Convert
 * @param  {String} [$default='N/A'] Text to use if output is empty
 * @param  {String} [$suffix=''] Appened this to end of string
 * @return {String}
 */
function output($template, $default = 'N/A', $suffix = '') {
  if (empty($template)) {
    $template = $default;
  }

  return "{$template}{$suffix}";
}
