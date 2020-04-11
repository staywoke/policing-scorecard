<?php

if (!file_exists(__DIR__ . '/config.php')) {
  exit('Missing config.php');
}

require(__DIR__ . '/config.php');

function fetchLocationScorecard($state, $type, $location) {
  if (!$state) {
    throw new Exception("Missing required `state` parameter");
    exit();
  }
  if (!$type) {
    throw new Exception("Missing required `type` parameter");
    exit();
  }
  if (!$location) {
    throw new Exception("Missing required `location` parameter");
    exit();
  }

  $contents = @file_get_contents(API_BASE . "/scorecard/report/{$state}/{$type}/{$location}?apikey=" . API_KEY);
  if (!$contents) {
    throw new Exception("Unable to Load /scorecard/report/{$state}/{$type}/{$location}");
    exit();
  }

  $data = json_decode($contents, true);
  if (!$data) {
    throw new Exception("Invalid API JSON /scorecard/report/{$state}/{$type}/{$location}");
    exit();
  }

  if (count($data['errors']) > 0) {
    throw new Exception($data['errors'][0]);
    exit();
  }

  return $data['data'];
}

function fetchStateData($state) {
  if (!$state) {
    throw new Exception("Missing required `state` parameter");
    exit();
  }

  $contents = @file_get_contents(API_BASE . "/scorecard/state/{$state}?apikey=" . API_KEY);
  if (!$contents) {
    throw new Exception("Unable to Load /scorecard/state/{$state}");
    exit();
  }

  $data = json_decode($contents, true);
  if (!$data) {
    throw new Exception("Invalid API JSON /scorecard/state/{$state}");
    exit();
  }

  if (count($data['errors']) > 0) {
    throw new Exception($data['errors'][0]);
    exit();
  }

  return $data['data'];
}

function fetchGrades($state, $type) {
  if (!$state) {
    throw new Exception("Missing required `state` parameter");
    exit();
  }
  if (!$type) {
    throw new Exception("Missing required `type` parameter");
    exit();
  }

  $contents = @file_get_contents(API_BASE . "/scorecard/grades/{$state}/{$type}?apikey=" . API_KEY);
  if (!$contents) {
    throw new Exception("Unable to Load /scorecard/grades/{$state}/{$type}");
    exit();
  }

  $data = json_decode($contents, true);
  if (!$data) {
    throw new Exception("Invalid API JSON /scorecard/grades/{$state}/{$type}");
    exit();
  }

  if (count($data['errors']) > 0) {
    throw new Exception($data['errors'][0]);
    exit();
  }

  return $data['data'];
}

function getChange($change, $reverse = false, $label = 'since 2016') {
  $change = intval($change);
  $text = '';
  $tooltip = '';
  $class = '';

  if ($change && $change !== 0) {
    $text = ($change > 0) ? "<span class=\"grade-arrow\"><span>▶</span><small>+{$change}%</small></span>" : "<span class=\"grade-arrow\"><span>▶</span><small>{$change}%</small></span>";
    $class = ($change > 0) ? 'bad' : 'good';
    $tooltip = ($change > 0) ? "Up {$change}% {$label}" : "Down ". abs($change) ."% {$label}";

    if ($reverse) {
      $class .= ' reverse';
    }

    return "<a href=\"javascript:void(0)\" class=\"stats-change tooltip {$class}\" data-tooltip=\"{$tooltip}\">{$text}</a>";
  }
}

function nFormatter($num, $decimal = 2) {
  $num = intval(str_replace(',', '', $num));
  $units = ["k", "M", "B", "T"];
  $order = floor(log($num) / log(1000));
  $unit_name = $units[($order - 1)];

  $val = ($num === 0) ? $num : round(floatval($num / 1000 ** $order), $decimal) . $unit_name;

  // output number remainder + unitname
  return '$' . $val;
}

function generateBarChartHeader($scorecard, $type) {
  $output = '<div class="keys">';

  if ($type === 'police-department') {
    if (isset($scorecard['police_funding']['police_budget'])) {
      $output .= '<span class="key key-red"></span> Police <span class="hide-mobile">' . nFormatter($scorecard['police_funding']['police_budget'], 1) . '</span>';
    }

    if (isset($scorecard['police_funding']['health_budget'])) {
      $output .= '<span class="key key-black"></span> Health <span class="hide-mobile">' . nFormatter($scorecard['police_funding']['health_budget'], 1) . '</span>';
    }

    if (isset($scorecard['police_funding']['housing_budget'])) {
      $output .= '<span class="key key-other"></span> Housing <span class="hide-mobile">' . nFormatter($scorecard['police_funding']['housing_budget'], 1) . '</span>';
    }
  } else if ($type = 'sheriff') {
    if (isset($scorecard['police_funding']['police_budget']) || isset($scorecard['police_funding']['jail_budget'])) {
      $output .= '<span class="key key-red"></span> Police & Jail <span class="hide-mobile">' . nFormatter(($scorecard['police_funding']['police_budget'] + $scorecard['police_funding']['jail_budget']), 1) . '</span>';
    }

    if (isset($scorecard['police_funding']['health_budget'])) {
      $output .= '<span class="key key-black"></span> Health <span class="hide-mobile">' . nFormatter($scorecard['police_funding']['health_budget'], 1) . '</span>';
    }

    if (isset($scorecard['police_funding']['education_budget'])) {
      $output .= '<span class="key key-other"></span> Education <span class="hide-mobile">' . nFormatter($scorecard['police_funding']['education_budget'], 1) . '</span>';
    }
  }

  $output .= '</div>';

  return $output;
}

function generateArrestChart($scorecard) {
  $output = array(
    'labels' => array(),
    'datasets' => array(
      array(
        'label' => 'Arrests',
        'backgroundColor' => '#58595b',
        'stack' => 'arrests',
        'data' => array()
      )
    )
  );

  if (isset($scorecard['arrests']['arrests_2013'])) {
    $output['labels'][] = '2013';
    $output['datasets'][0]['data'][] = $scorecard['arrests']['arrests_2013'];
  }

  if (isset($scorecard['arrests']['arrests_2014'])) {
    $output['labels'][] = '2014';
    $output['datasets'][0]['data'][] = $scorecard['arrests']['arrests_2014'];
  }

  if (isset($scorecard['arrests']['arrests_2015'])) {
    $output['labels'][] = '2015';
    $output['datasets'][0]['data'][] = $scorecard['arrests']['arrests_2015'];
  }

  if (isset($scorecard['arrests']['arrests_2016'])) {
    $output['labels'][] = '2016';
    $output['datasets'][0]['data'][] = $scorecard['arrests']['arrests_2016'];
  }

  if (isset($scorecard['arrests']['arrests_2017'])) {
    $output['labels'][] = '2017';
    $output['datasets'][0]['data'][] = $scorecard['arrests']['arrests_2017'];
  }

  if (isset($scorecard['arrests']['arrests_2018'])) {
    $output['labels'][] = '2018';
    $output['datasets'][0]['data'][] = $scorecard['arrests']['arrests_2018'];
  }

  return json_encode($output, JSON_PRETTY_PRINT);
}

function generateHistoryChart($scorecard) {
  $output = array(
    'labels' => array(),
    'datasets' => array(
      array(
        'label' => 'Police Shootings',
        'backgroundColor' => '#f67f85',
        'stack' => 'police-violence',
        'hidden' => false,
        'data' => array()
      ),
      array(
        'label' => 'Other Police Weapons',
        'backgroundColor' => '#58595b',
        'stack' => 'police-violence',
        'hidden' => true,
        'data' => array()
      )
    )
  );

  if (isset($scorecard['police_violence']['less_lethal_force_2013']) || isset($scorecard['police_violence']['police_shootings_2013'])) {
    $output['labels'][] = '2013';

    $output['datasets'][0]['data'][] = $scorecard['police_violence']['police_shootings_2013'];
    $output['datasets'][1]['data'][] = $scorecard['police_violence']['less_lethal_force_2013'];
  }

  if (isset($scorecard['police_violence']['less_lethal_force_2014']) || isset($scorecard['police_violence']['police_shootings_2014'])) {
    $output['labels'][] = '2014';

    $output['datasets'][0]['data'][] = $scorecard['police_violence']['police_shootings_2014'];
    $output['datasets'][1]['data'][] = $scorecard['police_violence']['less_lethal_force_2014'];
  }

  if (isset($scorecard['police_violence']['less_lethal_force_2015']) || isset($scorecard['police_violence']['police_shootings_2015'])) {
    $output['labels'][] = '2015';

    $output['datasets'][0]['data'][] = $scorecard['police_violence']['police_shootings_2015'];
    $output['datasets'][1]['data'][] = $scorecard['police_violence']['less_lethal_force_2015'];
  }

  if (isset($scorecard['police_violence']['less_lethal_force_2016']) || isset($scorecard['police_violence']['police_shootings_2016'])) {
    $output['labels'][] = '2016';

    $output['datasets'][0]['data'][] = $scorecard['police_violence']['police_shootings_2016'];
    $output['datasets'][1]['data'][] = $scorecard['police_violence']['less_lethal_force_2016'];
  }

  if (isset($scorecard['police_violence']['less_lethal_force_2017']) || isset($scorecard['police_violence']['police_shootings_2017'])) {
    $output['labels'][] = '2017';

    $output['datasets'][0]['data'][] = $scorecard['police_violence']['police_shootings_2017'];
    $output['datasets'][1]['data'][] = $scorecard['police_violence']['less_lethal_force_2017'];
  }

  if (isset($scorecard['police_violence']['less_lethal_force_2018']) || isset($scorecard['police_violence']['police_shootings_2018'])) {
    $output['labels'][] = '2018';

    $output['datasets'][0]['data'][] = $scorecard['police_violence']['police_shootings_2018'];
    $output['datasets'][1]['data'][] = $scorecard['police_violence']['less_lethal_force_2018'];
  }

  return json_encode($output, JSON_PRETTY_PRINT);
}

function generateBarChart($scorecard, $type) {
  $output = array(
    'labels' => array(' '),
    'datasets' => array()
  );

  if ($type === 'police-department') {
    if (isset($scorecard['police_funding']['police_budget'])) {
      $police_budget = $scorecard['police_funding']['police_budget'];
      $output['datasets'][] = array(
        'label' => 'Police',
        'backgroundColor' => '#f67f85',
        'borderWidth' => 0,
        'data' => array($police_budget)
      );
    }

    if (isset($scorecard['police_funding']['health_budget'])) {
      $health_budget = $scorecard['police_funding']['health_budget'];
      $output['datasets'][] = array(
        'label' => 'Health',
        'backgroundColor' => '#58595b',
        'borderWidth' => 0,
        'data' => array($health_budget)
      );
    }

    if (isset($scorecard['police_funding']['housing_budget'])) {
      $housing_budget = $scorecard['police_funding']['housing_budget'];
      $output['datasets'][] = array(
        'label' => 'Housing',
        'backgroundColor' => '#9a9b9f',
        'borderWidth' => 0,
        'data' => array($housing_budget)
      );
    }
  } else if ($type = 'sheriff') {
    if (isset($scorecard['police_funding']['police_budget']) || isset($scorecard['police_funding']['jail_budget'])) {
      $police_budget = $scorecard['police_funding']['police_budget'];
      $jail_budget = $scorecard['police_funding']['jail_budget'];

      $output['datasets'][] = array(
        'label' => 'Police & Jail',
        'backgroundColor' => '#f67f85',
        'borderWidth' => 0,
        'data' => array($police_budget + $jail_budget)
      );
    }

    if (isset($scorecard['police_funding']['health_budget'])) {
      $health_budget = $scorecard['police_funding']['health_budget'];
      $output['datasets'][] = array(
        'label' => 'Health',
        'backgroundColor' => '#58595b',
        'borderWidth' => 0,
        'data' => array($health_budget)
      );
    }

    if (isset($scorecard['police_funding']['education_budget'])) {
      $education_budget = $scorecard['police_funding']['education_budget'];
      $output['datasets'][] = array(
        'label' => 'Education',
        'backgroundColor' => '#9a9b9f',
        'borderWidth' => 0,
        'data' => array($education_budget)
      );
    }
  }

  return json_encode($output, JSON_PRETTY_PRINT);
}

function getMapLocation($type, $scorecard, $location) {
  $map_data = array(
    'type' => $type,
    'name' => ($type === 'police-department') ? 'Police Department' : 'Sheriff Department',
    'data' => array(),
    'icon' => getGradeIcon($scorecard['report']['overall_score'])
  );

  $map_data['data'][] = array(
    'className' => 'location-' . $location,
    'colorIndex' => getColorIndex($scorecard['report']['overall_score']),
    'name' => $scorecard['agency']['name'],
    'lat' => floatval($scorecard['geo']['city']['latitude']),
    'lon' => floatval($scorecard['geo']['city']['longitude']),
    'value' => intval($scorecard['report']['overall_score'])
  );

  return json_encode($map_data, JSON_PRETTY_PRINT);
}

function getMapData($state, $type) {
  $grades = fetchGrades($state, $type);
  $map_data = array();
  $map_scores = array(
    array(),
    array(),
    array(),
    array(),
    array()
  );

  foreach ($grades as $grade) {
    if ($type === 'police-department' && !empty($grade['latitude']) && !empty($grade['longitude'])) {
      $index = getColorIndex($grade['overall_score']);
      $map_scores[$index-1][] = array(
        'className' => 'location-' . $grade['slug'],
        'colorIndex' => getColorIndex($grade['overall_score']),
        'name' => $grade['agency_name'],
        'lat' => $grade['latitude'],
        'lon' => $grade['longitude'],
        'value' => $grade['overall_score']
      );
    } else if ($type === 'sheriff' && !empty($grade['district'])) {
      $map_data[] = array(
        'className' => 'location-' . $grade['slug'],
        'colorIndex' => getColorIndex($grade['overall_score']),
        'name' => $grade['agency_name'],
        'hc-key' => $grade['district'],
        'value' => $grade['overall_score']
      );
    }
  }

  return ($type === 'police-department') ? json_encode($map_scores, JSON_PRETTY_PRINT) : json_encode($map_data, JSON_PRETTY_PRINT);
}

/**
 * Return Percent Score to Letter Grade
 * @param  {String} $score Percent Score
 * @return {String}
 */
function getColorIndex($score) {
  $score = intval($score);

  if ($score <= 59) {
    return 1;
  } elseif ($score <= 69 && $score >= 60) {
    return 2;
  } elseif ($score <= 79 && $score >= 70) {
    return 3;
  } elseif ($score <= 89 && $score >= 80) {
    return 4;
  } elseif ($score >= 90) {
    return 5;
  }
}

/**
 * Get Map Grade Icon
 * @param  {String} $score Percent Score
 * @return {String}
 */
function getGradeIcon($score) {
  $score = intval($score);

  if ($score <= 59) {
    return 'url(/assets/img/police-marker-f-active.svg)';
  } elseif ($score <= 62 && $score >= 60) {
    return 'url(/assets/img/police-marker-d-minus-active.svg)';
  } elseif ($score <= 66 && $score >= 63) {
    return 'url(/assets/img/police-marker-d-active.svg)';
  } elseif ($score <= 69 && $score >= 67) {
    return 'url(/assets/img/police-marker-d-plus-active.svg)';
  } elseif ($score <= 72 && $score >= 70) {
    return 'url(/assets/img/police-marker-c-minus-active.svg)';
  } elseif ($score <= 76 && $score >= 73) {
    return 'url(/assets/img/police-marker-c-active.svg)';
  } elseif ($score <= 79 && $score >= 77) {
    return 'url(/assets/img/police-marker-c-plus-active.svg)';
  } elseif ($score <= 82 && $score >= 80) {
    return 'url(/assets/img/police-marker-b-minus-active.svg)';
  } elseif ($score <= 86 && $score >= 83) {
    return 'url(/assets/img/police-marker-b-active.svg)';
  } elseif ($score <= 89 && $score >= 87) {
    return 'url(/assets/img/police-marker-b-plus-active.svg)';
  } elseif ($score <= 92 && $score >= 90) {
    return 'url(/assets/img/police-marker-a-minus-active.svg)';
  } elseif ($score <= 97 && $score >= 93) {
    return 'url(/assets/img/police-marker-a-active.svg)';
  } elseif ($score >= 98) {
    return 'url(/assets/img/police-marker-a-plus-active.svg)';
  }
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

function getStateIcon($abbr) {
  $states = array(
    "AL" => "B",
    "AK" => "A",
    "AZ" => "D",
    "AR" => "C",
    "CA" => "E",
    "CO" => "F",
    "CT" => "G",
    "DE" => "H",
    "DC" => "y",
    "FL" => "I",
    "GA" => "J",
    "HI" => "K",
    "ID" => "M",
    "IL" => "N",
    "IN" => "O",
    "IA" => "L",
    "KS" => "P",
    "KY" => "Q",
    "LA" => "R",
    "ME" => "U",
    "MD" => "T",
    "MA" => "S",
    "MI" => "V",
    "MN" => "W",
    "MS" => "Y",
    "MO" => "X",
    "MT" => "Z",
    "NE" => "c",
    "NV" => "g",
    "NH" => "d",
    "NJ" => "e",
    "NM" => "f",
    "NY" => "h",
    "NC" => "a",
    "ND" => "b",
    "OH" => "i",
    "OK" => "j",
    "OR" => "k",
    "PA" => "l",
    "RI" => "m",
    "SC" => "n",
    "SD" => "o",
    "TN" => "p",
    "TX" => "q",
    "UT" => "r",
    "VT" => "t",
    "VA" => "s",
    "WA" => "u",
    "WV" => "w",
    "WI" => "v",
    "WY" => "x",
    "US" => "z"
  );

  return $states[$abbr];
}