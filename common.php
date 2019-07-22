<?php

/**
 * Get City data from JSON file
 * @param  {String} [$city='los-angeles'] Slug of City Name
 * @return {Array}
 */
function getCityData($city = 'los-angeles') {
  $file = @file_get_contents("data/json/data-{$city}.json");
  if (!$file) throw new Exception("Unable to Load {$city}");

  $data = json_decode($file, true);
  if (!$data) throw new Exception("Unable to Parse {$city}");

  return $data;
}

function getSheriffData($sheriff = 'los-angeles') {
  $file = @file_get_contents("data/json/sheriff-{$sheriff}.json");
  if (!$file) throw new Exception("Unable to Load {$sheriff}");

  $data = json_decode($file, true);
  if (!$data) throw new Exception("Unable to Parse {$sheriff}");

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

/**
 * Output Number for Template
 * @param  [string] $string String to be converted to Number
 * @param  integer $decimal Number of Decimal Points
 * @param  string $suffix Suffix to Add to Output
 * @param  boolean $invert If this is a percent, and we need to subtract number from total
 * @return [string] Converted Number
 */
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

  if ($output === '0.0') {
    $output = '0';
  }

  if (substr($output, -2) === '.0') {
    $output = intval($string);
  }

  return "{$output}{$suffix}";
}

/**
 * Custom Color for Progress Bar
 * @param  [string] $score Number
 * @param  string $color Which Color Pattern to use
 * @param  string $break Which Break Point to use
 * @return [type] Color to use
 */
function progressBar($score, $color = 'default', $break = 'default') {
  if (empty($score)) {
    $score = 0;
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

  if ($score > 100) {
    $score = 100;
  }

  if ($score < 0) {
    $score = 0;
  }

  foreach ($breakpoints[$break] as $index => $breakpoint) {
    if ($score >= intval($breakpoint)) {
      $output = (($index + 1) < sizeof($colors[$color])) ? $colors[$color][$index + 1] : $colors[$color][$index];
    }
  }

  return $output;
}

/**
 * Get the hash of the current git HEAD
 * @param str $branch The git branch to check
 * @return mixed Either the hash or a boolean false
 */
function getHash($branch = 'master') {
  if ( $hash = file_get_contents( sprintf( '.git/refs/heads/%s', $branch ) ) ) {
    return $hash;
  } else {
    return false;
  }
}

function grammar($key, $value) {
  $value = intval($value);

  switch ($key) {
    case ($key === 'people'):
      return ($value === 1) ? "Person" : "People";
      break;
    default:
      return $key;
  }
}
