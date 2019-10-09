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

function getChange($change) {
  $change = intval(str_replace('%', '', $change));
  $label = 'since 2016';
  $text = '';
  $tooltip = '';
  $class = '';

  if ($change && $change !== 0) {
    $text = ($change > 0) ? '⤒' : '⤓';
    $class = ($change > 0) ? 'bad' : 'good';
    $tooltip = ($change > 0) ? "Up {$change}% {$label}" : "Down ". abs($change) ."% {$label}";

    return "<a href=\"javascript:void(0)\" class=\"stats-change tooltip {$class}\" data-tooltip=\"{$tooltip}\">{$text}</a>";
  }
}

function getMapKey($loc) {
  $keys = array(
    'alameda' => array(
      'district' => 'us-ca-001',
      'latitude' => 37.6788553,
      'longitude' => -122.4819393
    ),
    'alhambra' => array(
      'district' => null,
      'latitude' => 34.0855284,
      'longitude' => -118.1715274
    ),
    'alpine' => array(
      'district' => 'us-ca-003',
      'latitude' => 39.3551689,
      'longitude' => -123.5402062
    ),
    'amador' => array(
      'district' => 'us-ca-005',
      'latitude' => 38.4636889,
      'longitude' => -120.8308953
    ),
    'anaheim' => array(
      'district' => null,
      'latitude' => 33.833911,
      'longitude' => -117.9859158
    ),
    'antioch' => array(
      'district' => null,
      'latitude' => 37.9811137,
      'longitude' => -121.8318145
    ),
    'bakersfield' => array(
      'district' => null,
      'latitude' => 35.3208959,
      'longitude' => -119.1591105
    ),
    'berkeley' => array(
      'district' => null,
      'latitude' => 37.8711427,
      'longitude' => -122.3716483
    ),
    'beverly-hills' => array(
      'district' => null,
      'latitude' => 34.0825477,
      'longitude' => -118.4170863
    ),
    'buena-park' => array(
      'district' => null,
      'latitude' => 33.8527378,
      'longitude' => -118.024336
    ),
    'burbank' => array(
      'district' => null,
      'latitude' => 34.1820055,
      'longitude' => -118.3603161
    ),
    'carlsbad' => array(
      'district' => null,
      'latitude' => 33.12149990,
      'longitude' => -117.3580127
    ),
    'chico' => array(
      'district' => null,
      'latitude' => 39.7578253,
      'longitude' => -121.8761111
    ),
    'chino' => array(
      'district' => null,
      'latitude' => 33.9863925,
      'longitude' => -117.7379477
    ),
    'chula-vista' => array(
      'district' => null,
      'latitude' => 32.6317469,
      'longitude' => -117.0947407
    ),
    'citrus-heights' => array(
      'district' => null,
      'latitude' => 38.6931638,
      'longitude' => -121.322489
    ),
    'clovis' => array(
      'district' => null,
      'latitude' => 36.8689607,
      'longitude' => -119.7119341
    ),
    'colusa' => array(
      'district' => 'us-ca-011',
      'latitude' => 39.1694402,
      'longitude' => -122.5710779
    ),
    'concord' => array(
      'district' => null,
      'latitude' => 37.9735258,
      'longitude' => -122.0690226
    ),
    'corona' => array(
      'district' => null,
      'latitude' => 33.8593201,
      'longitude' => -117.6489866
    ),
    'costa-mesa' => array(
      'district' => null,
      'latitude' => 33.6636031,
      'longitude' => -117.9444494
    ),
    'culver-city' => array(
      'district' => null,
      'latitude' => 34.0058945,
      'longitude' => -118.4441295
    ),
    'daly-city' => array(
      'district' => null,
      'latitude' => 37.6786773,
      'longitude' => -122.4880235
    ),
    'del-norte' => array(
      'district' => 'us-ca-015',
      'latitude' => 42.1361959,
      'longitude' => -123.6233801
    ),
    'downey' => array(
      'district' => null,
      'latitude' => 33.937672,
      'longitude' => -118.165528
    ),
    'el-cajon' => array(
      'district' => null,
      'latitude' => 32.7992941,
      'longitude' => -116.9883216
    ),
    'el-monte' => array(
      'district' => null,
      'latitude' => 34.0711646,
      'longitude' => -118.070301
    ),
    'elk-grove' => array(
      'district' => null,
      'latitude' => 38.4070135,
      'longitude' => -121.4489056
    ),
    'escondido' => array(
      'district' => null,
      'latitude' => 33.1347057,
      'longitude' => -117.1401882
    ),
    'fairfield' => array(
      'district' => null,
      'latitude' => 38.2357756,
      'longitude' => -122.1715373
    ),
    'fontana' => array(
      'district' => null,
      'latitude' => 34.1087805,
      'longitude' => -117.4978746
    ),
    'fremont' => array(
      'district' => null,
      'latitude' => 37.5303478,
      'longitude' => -122.1522422
    ),
    'fresno' => array(
      'district' => 'us-ca-019',
      'latitude' => 36.7854509,
      'longitude' => -119.9349849
    ),
    'fullerton' => array(
      'district' => null,
      'latitude' => 33.8893864,
      'longitude' => -117.959667
    ),
    'garden-grove' => array(
      'district' => null,
      'latitude' => 33.7690636,
      'longitude' => -118.0387446
    ),
    'gardena' => array(
      'district' => null,
      'latitude' => 33.8910063,
      'longitude' => -118.3261795
    ),
    'glenn' => array(
      'district' => 'us-ca-021',
      'latitude' => 39.5914592,
      'longitude' => -122.9592149
    ),
    'glendale' => array(
      'district' => null,
      'latitude' => 34.1929915,
      'longitude' => -118.2800321
    ),
    'hawthorne' => array(
      'district' => null,
      'latitude' => 33.9140123,
      'longitude' => -118.3636184
    ),
    'hayward' => array(
      'district' => null,
      'latitude' => 37.6180305,
      'longitude' => -122.2097354
    ),
    'huntington-beach' => array(
      'district' => null,
      'latitude' => 33.6929668,
      'longitude' => -118.0817237
    ),
    'inglewood' => array(
      'district' => null,
      'latitude' => 33.9540723,
      'longitude' => -118.3636729
    ),
    'inyo' => array(
      'district' => 'us-ca-027',
      'latitude' => 36.6229271,
      'longitude' => -118.3431371
    ),
    'irvine' => array(
      'district' => null,
      'latitude' => 33.6865019,
      'longitude' => -117.8435995
    ),
    'lassen' => array(
      'district' => 'us-ca-035',
      'latitude' => 40.4457714,
      'longitude' => -121.2257839
    ),
    'livermore' => array(
      'district' => null,
      'latitude' => 37.6803632,
      'longitude' => -121.8425697
    ),
    'long-beach' => array(
      'district' => null,
      'latitude' => 33.8001882,
      'longitude' => -118.2263202
    ),
    'los-angeles' => array(
      'district' => 'us-ca-037',
      'latitude' => 34.0203992,
      'longitude' => -118.5521561
    ),
    'mariposa' => array(
      'district' => 'us-ca-043',
      'latitude' => 37.5433732,
      'longitude' => -120.4131849
    ),
    'merced' => array(
      'district' => 'us-ca-047',
      'latitude' => 37.2987237,
      'longitude' => -120.5416012
    ),
    'modoc' => array(
      'district' => 'us-ca-043',
      'latitude' => 41.5902084,
      'longitude' => -121.2895633
    ),
    'mono' => array(
      'district' => 'us-ca-051',
      'latitude' => 38.0876437,
      'longitude' => -119.3039387
    ),
    'milpitas' => array(
      'district' => null,
      'latitude' => 37.4314848,
      'longitude' => -121.9200735
    ),
    'modesto' => array(
      'district' => null,
      'latitude' => 37.653264,
      'longitude' => -121.0588637
    ),
    'mountain-view' => array(
      'district' => null,
      'latitude' => 37.4133183,
      'longitude' => -122.116372
    ),
    'murrieta' => array(
      'district' => null,
      'latitude' => 33.5774401,
      'longitude' => -117.2686512
    ),
    'national-city' => array(
      'district' => null,
      'latitude' => 32.6481175,
      'longitude' => -117.127726
    ),
    'newport-beach' => array(
      'district' => null,
      'latitude' => 33.6179895,
      'longitude' => -117.9407766
    ),
    'oakland' => array(
      'district' => null,
      'latitude' => 37.7586967,
      'longitude' => -122.3055185
    ),
    'oceanside' => array(
      'district' => null,
      'latitude' => 33.2259558,
      'longitude' => -117.3877522
    ),
    'ontario' => array(
      'district' => null,
      'latitude' => 34.0339915,
      'longitude' => -117.6741436
    ),
    'orange' => array(
      'district' => 'us-ca-059',
      'latitude' => 33.8076142,
      'longitude' => -117.887464
    ),
    'oxnard' => array(
      'district' => null,
      'latitude' => 34.1901825,
      'longitude' => -119.2947877
    ),
    'palm-springs' => array(
      'district' => null,
      'latitude' => 33.7716126,
      'longitude' => -116.6341577
    ),
    'palo-alto' => array(
      'district' => null,
      'latitude' => 37.4256448,
      'longitude' => -122.170455
    ),
    'pasadena' => array(
      'district' => null,
      'latitude' => 34.1844509,
      'longitude' => -118.2020197
    ),
    'pittsburg' => array(
      'district' => null,
      'latitude' => 38.02121760,
      'longitude' => -121.9813646
    ),
    'pleasanton' => array(
      'district' => null,
      'latitude' => 37.6615263,
      'longitude' => -121.9471588
    ),
    'pomona' => array(
      'district' => null,
      'latitude' => 34.065719,
      'longitude' => -117.805047
    ),
    'redding' => array(
      'district' => null,
      'latitude' => 40.5741872,
      'longitude' => -122.4329412
    ),
    'redlands' => array(
      'district' => null,
      'latitude' => 34.052693,
      'longitude' => -117.2209807
    ),
    'redondo-beach' => array(
      'district' => null,
      'latitude' => 33.8546327,
      'longitude' => -118.3946945
    ),
    'redwood-city' => array(
      'district' => null,
      'latitude' => 37.5081152,
      'longitude' => -122.2856227
    ),
    'rialto' => array(
      'district' => null,
      'latitude' => 34.1033965,
      'longitude' => -117.4241485
    ),
    'richmond' => array(
      'district' => null,
      'latitude' => 37.9552521,
      'longitude' => -122.4129976
    ),
    'riverside' => array(
      'district' => 'us-ca-065',
      'latitude' => 33.9459956,
      'longitude' => -117.4697387
    ),
    'roseville' => array(
      'district' => null,
      'latitude' => 38.7632618,
      'longitude' => -121.3628276
    ),
    'sacramento' => array(
      'district' => 'us-ca-067',
      'latitude' => 38.5615195,
      'longitude' => -121.5131231
    ),
    'salinas' => array(
      'district' => null,
      'latitude' => 36.6866299,
      'longitude' => -121.6763035
    ),
    'san-benito' => array(
      'district' => 'us-ca-069',
      'latitude' => 36.5930693,
      'longitude' => -121.4011582
    ),
    'san-bernardino' => array(
      'district' => 'us-ca-071',
      'latitude' => 34.1488564,
      'longitude' => -117.3648553
    ),
    'san-diego' => array(
      'district' => 'us-ca-073',
      'latitude' => 32.8244741,
      'longitude' => -117.2494021
    ),
    'san-francisco' => array(
      'district' => 'us-ca-075',
      'latitude' => 37.7576792,
      'longitude' => -122.5078106
    ),
    'san-jose' => array(
      'district' => null,
      'latitude' => 37.2967788,
      'longitude' => -121.9578364
    ),
    'san-leandro' => array(
      'district' => null,
      'latitude' => 37.705078,
      'longitude' => -122.2012561
    ),
    'san-mateo' => array(
      'district' => 'us-ca-081',
      'latitude' => 37.5565308,
      'longitude' => -122.3507351
    ),
    'santa-ana' => array(
      'district' => null,
      'latitude' => 33.7378286,
      'longitude' => -117.9222527
    ),
    'santa-barbara' => array(
      'district' => 'us-ca-083',
      'latitude' => 34.398567,
      'longitude' => -119.8200662
    ),
    'santa-clara' => array(
      'district' => 'us-ca-085',
      'latitude' => 37.3708853,
      'longitude' => -122.0026576
    ),
    'santa-cruz' => array(
      'district' => 'us-ca-087',
      'latitude' => 36.9758862,
      'longitude' => -122.082585
    ),
    'santa-maria' => array(
      'district' => null,
      'latitude' => 34.9322904,
      'longitude' => -120.5015756
    ),
    'santa-monica' => array(
      'district' => null,
      'latitude' => 34.0218555,
      'longitude' => -118.5158605
    ),
    'santa-rosa' => array(
      'district' => null,
      'latitude' => 38.4355291,
      'longitude' => -122.7737557
    ),
    'sierra' => array(
      'district' => 'us-ca-091',
      'latitude' => 39.5838869,
      'longitude' => -121.0913294
    ),
    'simi-valley' => array(
      'district' => null,
      'latitude' => 34.2657275,
      'longitude' => -118.800676
    ),
    'south-gate' => array(
      'district' => null,
      'latitude' => 33.9381178,
      'longitude' => -118.228917
    ),
    'south-san-francisco' => array(
      'district' => null,
      'latitude' => 37.652634,
      'longitude' => -122.4163181
    ),
    'stockton' => array(
      'district' => null,
      'latitude' => 37.9730026,
      'longitude' => -121.3720881
    ),
    'sunnyvale' => array(
      'district' => null,
      'latitude' => 37.395729,
      'longitude' => -122.059226
    ),
    'torrance' => array(
      'district' => null,
      'latitude' => 33.833634,
      'longitude' => -118.386214
    ),
    'tracy' => array(
      'district' => null,
      'latitude' => 37.7184716,
      'longitude' => -121.51679
    ),
    'trinity' => array(
      'district' => 'us-ca-105',
      'latitude' => 40.6722573,
      'longitude' => -123.5964875
    ),
    'turlock' => array(
      'district' => null,
      'latitude' => 37.5017299,
      'longitude' => -120.8929582
    ),
    'tustin' => array(
      'district' => null,
      'latitude' => 33.7335124,
      'longitude' => -117.8367136
    ),
    'union-city' => array(
      'district' => null,
      'latitude' => 37.5989618,
      'longitude' => -122.0884766
    ),
    'vacaville' => array(
      'district' => null,
      'latitude' => 38.36303060,
      'longitude' => -122.0349126
    ),
    'vallejo' => array(
      'district' => null,
      'latitude' => 38.1166861,
      'longitude' => -122.347252
    ),
    'ventura' => array(
      'district' => 'us-ca-111',
      'latitude' => 34.3024453,
      'longitude' => -119.3189982
    ),
    'visalia' => array(
      'district' => null,
      'latitude' => 36.3174765,
      'longitude' => -119.4018881
    ),
    'walnut-creek' => array(
      'district' => null,
      'latitude' => 37.8942183,
      'longitude' => -122.075328
    ),
    'west-covina' => array(
      'district' => null,
      'latitude' => 34.0471691,
      'longitude' => -117.9478046
    ),
    'westminster' => array(
      'district' => null,
      'latitude' => 33.746996,
      'longitude' => -118.0290778
    ),
    'whittier' => array(
      'district' => null,
      'latitude' => 33.9794365,
      'longitude' => -118.054016
    ),
    'butte' => array(
      'district' => 'us-ca-007',
      'latitude' => 39.7235116,
      'longitude' => -121.8539178
    ),
    'calaveras' => array(
      'district' => 'us-ca-009',
      'latitude' => 38.1703715,
      'longitude' => -120.7886543
    ),
    'contra-costa' => array(
      'district' => 'us-ca-013',
      'latitude' => 37.9089198,
      'longitude' => -122.2686984
    ),
    'el-dorado' => array(
      'district' => 'us-ca-017',
      'latitude' => 38.7887417,
      'longitude' => -121.071384
    ),
    'humboldt' => array(
      'district' => null,
      'latitude' => 40.7321853,
      'longitude' => -124.5057622
    ),
    'imperial' => array(
      'district' => 'us-ca-025',
      'latitude' => 32.8434237,
      'longitude' => -115.5828535
    ),
    'kern' => array(
      'district' => 'us-ca-029',
      'latitude' => 35.2892093,
      'longitude' => -120.0288152
    ),
    'kings' => array(
      'district' => 'us-ca-031',
      'latitude' => 36.1384817,
      'longitude' => -120.1755608
    ),
    'lake' => array(
      'district' => 'us-ca-033',
      'latitude' => 37.2710388,
      'longitude' => -122.0452593
    ),
    'madera' => array(
      'district' => 'us-ca-039',
      'latitude' => 36.9680438,
      'longitude' => -120.1790586
    ),
    'marin' => array(
      'district' => 'us-ca-041',
      'latitude' => 38.0675456,
      'longitude' => -123.0218438
    ),
    'mendocino' => array(
      'district' => 'us-ca-045',
      'latitude' => 39.3115072,
      'longitude' => -123.8612401
    ),
    'merced' => array(
      'district' => 'us-ca-047',
      'latitude' => 37.2987237,
      'longitude' => -120.5416012
    ),
    'monterey' => array(
      'district' => 'us-ca-053',
      'latitude' => 36.6108969,
      'longitude' => -121.902604
    ),
    'napa' => array(
      'district' => 'us-ca-055',
      'latitude' => 38.5092341,
      'longitude' => -122.6347552
    ),
    'nevada' => array(
      'district' => 'us-ca-057',
      'latitude' => 39.2647841,
      'longitude' => -121.2035214
    ),
    'placer' => array(
      'district' => 'us-ca-061',
      'latitude' => 39.012652,
      'longitude' => -121.3051617
    ),
    'san-joaquin' => array(
      'district' => 'us-ca-077',
      'latitude' => 36.6048688,
      'longitude' => -120.2136974
    ),
    'san-luis-obispo' => array(
      'district' => 'us-ca-079',
      'latitude' => 35.272491,
      'longitude' => -120.7054911
    ),
    'shasta' => array(
      'district' => 'us-ca-089',
      'latitude' => 40.6546922,
      'longitude' => -122.5697551
    ),
    'siskiyou' => array(
      'district' => 'us-ca-093',
      'latitude' => 41.4953872,
      'longitude' => -123.7061791
    ),
    'solano' => array(
      'district' => 'us-ca-095',
      'latitude' => 38.2850507,
      'longitude' => -122.2809738
    ),
    'sonoma' => array(
      'district' => 'us-ca-097',
      'latitude' => 38.2910881,
      'longitude' => -122.4842045
    ),
    'stanislaus' => array(
      'district' => 'us-ca-099',
      'latitude' => 37.6047662,
      'longitude' => -121.4987972
    ),
    'suttercoroner' => array(
      'district' => 'us-ca-101',
      'latitude' => 39.1569036,
      'longitude' => -121.7682779
    ),
    'tehama' => array(
      'district' => 'us-ca-103',
      'latitude' => 40.0225476,
      'longitude' => -122.1355477
    ),
    'tulare' => array(
      'district' => 'us-ca-107',
      'latitude' => 36.1855667,
      'longitude' => -119.3794296
    ),
    'tuolumne' => array(
      'district' => 'us-ca-109',
      'latitude' => 37.9613366,
      'longitude' => -120.2634724
    ),
    'yolo' => array(
      'district' => 'us-ca-113',
      'latitude' => 38.7385566,
      'longitude' => -121.8177928
    ),
    'yuba' => array(
      'district' => 'us-ca-115',
      'latitude' => 39.1313367,
      'longitude' => -121.6783675
    )
  );

  return $keys[$loc];
}

function getMapLocation($type, $loc) {
  if ($type === 'city') {
    $data = getCityData($loc);
  } else if ($type === 'sheriff') {
    $data = getSheriffData($loc);
  }

  $loc_data = getMapKey($loc);

  $map_data = array(
    'type' => $type,
    'name' => ($type === 'city') ? 'Police Department' : 'Sheriff Department',
    'data' => array(),
    'icon' => getGradeIcon($data['overall_score'])
  );

  $map_data['data'][] = array(
      'className' => 'location-' . $loc,
      'colorIndex' => getColorIndex($data['overall_score']),
      'name' => $data['agency_name'],
      'lat' => $loc_data['latitude'],
      'lon' => $loc_data['longitude'],
      'value' => intval($data['overall_score']
    )
  );

  return json_encode($map_data, JSON_PRETTY_PRINT);
}

function getMapData($type) {
  $grades = reportCard($type);
  $map_data = array();
  $map_scores = array(
    array(),
    array(),
    array(),
    array(),
    array()
  );

  foreach ($grades as $grade) {
    $loc = preg_replace('/[^A-Za-z ]/', '', strtolower($grade['agency_name']));
    $loc = str_replace(' ', '-', $loc);
    $data = getMapKey($loc);

    if ($type === 'data' && !empty($data['latitude']) && !empty($data['longitude'])) {
      $index = getColorIndex($grade['overall_score']);
      $map_scores[$index-1][] = array(
        'className' => 'location-' . $loc,
        'colorIndex' => getColorIndex($grade['overall_score']),
        'name' => $grade['agency_name'],
        'lat' => $data['latitude'],
        'lon' => $data['longitude'],
        'value' => $grade['overall_score']
      );
    } else if ($type === 'sheriff' && !empty($data['district'])) {
      $map_data[] = array(
        'className' => 'location-' . $loc,
        'colorIndex' => getColorIndex($grade['overall_score']),
        'name' => $grade['agency_name'],
        'hc-key' => $data['district'],
        'value' => $grade['overall_score']
      );
    }
  }

  return ($type === 'data') ? json_encode($map_scores, JSON_PRETTY_PRINT) : json_encode($map_data, JSON_PRETTY_PRINT);
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
    return 'url(assets/img/police-marker-f-active.svg)';
  } elseif ($score <= 62 && $score >= 60) {
    return 'url(assets/img/police-marker-d-minus-active.svg)';
  } elseif ($score <= 66 && $score >= 63) {
    return 'url(assets/img/police-marker-d-active.svg)';
  } elseif ($score <= 69 && $score >= 67) {
    return 'url(assets/img/police-marker-d-plus-active.svg)';
  } elseif ($score <= 72 && $score >= 70) {
    return 'url(assets/img/police-marker-c-minus-active.svg)';
  } elseif ($score <= 76 && $score >= 73) {
    return 'url(assets/img/police-marker-c-active.svg)';
  } elseif ($score <= 79 && $score >= 77) {
    return 'url(assets/img/police-marker-c-plus-active.svg)';
  } elseif ($score <= 82 && $score >= 80) {
    return 'url(assets/img/police-marker-b-minus-active.svg)';
  } elseif ($score <= 86 && $score >= 83) {
    return 'url(assets/img/police-marker-b-active.svg)';
  } elseif ($score <= 89 && $score >= 87) {
    return 'url(assets/img/police-marker-b-plus-active.svg)';
  } elseif ($score <= 92 && $score >= 90) {
    return 'url(assets/img/police-marker-a-minus-active.svg)';
  } elseif ($score <= 97 && $score >= 93) {
    return 'url(assets/img/police-marker-a-active.svg)';
  } elseif ($score >= 98) {
    return 'url(assets/img/police-marker-a-plus-active.svg)';
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
 * Fetch Data and Sort Scorecard
 * @return {Array}
 */
function reportCard($type = 'data') {
  if ($type === 'city') {
    $type = 'data';
  }

  $file = @file_get_contents("data/json/_{$type}_grades.json");
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
