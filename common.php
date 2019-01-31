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

  if ($score <= 59) {
    return 'F';
  } elseif ($score <= 62 && $score >= 60) {
    return 'D-';
  } elseif ($score <= 66 && $score >= 63) {
    return 'D';
  } elseif ($score <= 69 && $score >= 67) {
    return 'D+';
  } elseif ($score <= 72 && $score >= 70) {
    return 'C-';
  } elseif ($score <= 76 && $score >= 73) {
    return 'C';
  } elseif ($score <= 79 && $score >= 77) {
    return 'C+';
  } elseif ($score <= 82 && $score >= 80) {
    return 'B-';
  } elseif ($score <= 86 && $score >= 83) {
    return 'B';
  } elseif ($score <= 89 && $score >= 87) {
    return 'B+';
  } elseif ($score <= 92 && $score >= 90) {
    return 'A-';
  } elseif ($score <= 97 && $score >= 93) {
    return 'A';
  } elseif ($score >= 98) {
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
  $template = strval($template);
  if (empty($template) && $template !== '0') {
    $template = $default;
  }

  return "{$template}{$suffix}";
}

function num($string, $decimal = 0, $suffix = '', $invert = false) {
  if (empty($string) && $string !== 0 && $string !== '0') {
    return "N/A";
  }

  $string = preg_replace("/[^0-9\.]/", "", trim($string));
  $output = floatval($string);
  if ($output < 0) {
    $output = 0;
  }

  if ($invert) {
    $output = (100 - $output);
  }

  $output = number_format($output, $decimal);

  return "{$output}{$suffix}";
}

function progressBar($score, $color = 'default', $break = 'default') {
  if (empty($score)) {
    return '';
  }

  $breakpoints = array(
    'default' => array(20, 40, 50, 60, 100)
  );

  $colors = array(
    'default' => array('red', 'orange', 'yellow', 'green', 'bright-green'),
    'reverse' => array('bright-green', 'green', 'yellow', 'orange', 'red')
  );

  $output = $colors[$color][0];
  $score = floatval(preg_replace("/[^0-9\.]/", "", trim($score)));

  foreach ($breakpoints[$break] as $index => $breakpoint) {
    if ($score >= intval($breakpoint)) {
      $output = ($index < sizeof($colors[$color])) ? $colors[$color][$index + 1] : $colors[$color][$index];
    }
  }

  return $output;
}
