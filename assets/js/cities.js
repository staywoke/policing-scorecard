var cities = [
  {
    name: "Alameda",
    id: "alameda"
  },
  {
    name: "Alhambra",
    id: "alhambra"
  },
  {
    name: "Anaheim",
    id: "anaheim"
  },
  {
    name: "Antioch",
    id: "antioch"
  },
  {
    name: "Bakersfield",
    id: "bakersfield"
  },
  {
    name: "Berkeley",
    id: "berkeley"
  },
  {
    name: "Beverly Hills",
    id: "beverly-hills"
  },
  {
    name: "Buena Park",
    id: "buena-park"
  },
  {
    name: "Burbank",
    id: "burbank"
  },
  {
    name: "Carlsbad",
    id: "carlsbad"
  },
  {
    name: "Chico",
    id: "chico"
  },
  {
    name: "Chino",
    id: "chino"
  },
  {
    name: "Chula Vista",
    id: "chula-vista"
  },
  {
    name: "Citrus Heights",
    id: "citrus-heights"
  },
  {
    name: "Clovis",
    id: "clovis"
  },
  {
    name: "Concord",
    id: "concord"
  },
  {
    name: "Corona",
    id: "corona"
  },
  {
    name: "Costa Mesa",
    id: "costa-mesa"
  },
  {
    name: "Culver City",
    id: "culver-city"
  },
  {
    name: "Daly City",
    id: "daly-city"
  },
  {
    name: "Downey",
    id: "downey"
  },
  {
    name: "El Cajon",
    id: "el-cajon"
  },
  {
    name: "El Monte",
    id: "el-monte"
  },
  {
    name: "Elk Grove",
    id: "elk-grove"
  },
  {
    name: "Escondido",
    id: "escondido"
  },
  {
    name: "Fairfield",
    id: "fairfield"
  },
  {
    name: "Fontana",
    id: "fontana"
  },
  {
    name: "Fremont",
    id: "fremont"
  },
  {
    name: "Fresno",
    id: "fresno"
  },
  {
    name: "Fullerton",
    id: "fullerton"
  },
  {
    name: "Garden Grove",
    id: "garden-grove"
  },
  {
    name: "Gardena",
    id: "gardena"
  },
  {
    name: "Glendale",
    id: "glendale"
  },
  {
    name: "Hawthorne",
    id: "hawthorne"
  },
  {
    name: "Hayward",
    id: "hayward"
  },
  {
    name: "Huntington Beach",
    id: "huntington-beach"
  },
  {
    name: "Inglewood",
    id: "inglewood"
  },
  {
    name: "Irvine",
    id: "irvine"
  },
  {
    name: "Livermore",
    id: "livermore"
  },
  {
    name: "Long Beach",
    id: "long-beach"
  },
  {
    name: "Los Angeles",
    id: "los-angeles"
  },
  {
    name: "Merced",
    id: "merced"
  },
  {
    name: "Milpitas",
    id: "milpitas"
  },
  {
    name: "Modesto",
    id: "modesto"
  },
  {
    name: "Mountain View",
    id: "mountain-view"
  },
  {
    name: "Murrieta",
    id: "murrieta"
  },
  {
    name: "National City",
    id: "national-city"
  },
  {
    name: "Newport Beach",
    id: "newport-beach"
  },
  {
    name: "Oakland",
    id: "oakland"
  },
  {
    name: "Oceanside",
    id: "oceanside"
  },
  {
    name: "Ontario",
    id: "ontario"
  },
  {
    name: "Orange",
    id: "orange"
  },
  {
    name: "Oxnard",
    id: "oxnard"
  },
  {
    name: "Palm Springs",
    id: "palm-springs"
  },
  {
    name: "Palo Alto",
    id: "palo-alto"
  },
  {
    name: "Pasadena",
    id: "pasadena"
  },
  {
    name: "Pittsburg",
    id: "pittsburg"
  },
  {
    name: "Pleasanton",
    id: "pleasanton"
  },
  {
    name: "Pomona",
    id: "pomona"
  },
  {
    name: "Redding",
    id: "redding"
  },
  {
    name: "Redlands",
    id: "redlands"
  },
  {
    name: "Redondo Beach",
    id: "redondo-beach"
  },
  {
    name: "Redwood City",
    id: "redwood-city"
  },
  {
    name: "Rialto",
    id: "rialto"
  },
  {
    name: "Richmond",
    id: "richmond"
  },
  {
    name: "Riverside",
    id: "riverside"
  },
  {
    name: "Roseville",
    id: "roseville"
  },
  {
    name: "Sacramento",
    id: "sacramento"
  },
  {
    name: "Salinas",
    id: "salinas"
  },
  {
    name: "San Bernardino",
    id: "san-bernardino"
  },
  {
    name: "San Diego",
    id: "san-diego"
  },
  {
    name: "San Francisco",
    id: "san-francisco"
  },
  {
    name: "San Jose",
    id: "san-jose"
  },
  {
    name: "San Leandro",
    id: "san-leandro"
  },
  {
    name: "San Mateo",
    id: "san-mateo"
  },
  {
    name: "Santa Ana",
    id: "santa-ana"
  },
  {
    name: "Santa Barbara",
    id: "santa-barbara"
  },
  {
    name: "Santa Clara",
    id: "santa-clara"
  },
  {
    name: "Santa Cruz",
    id: "santa-cruz"
  },
  {
    name: "Santa Maria",
    id: "santa-maria"
  },
  {
    name: "Santa Monica",
    id: "santa-monica"
  },
  {
    name: "Santa Rosa",
    id: "santa-rosa"
  },
  {
    name: "Simi Valley",
    id: "simi-valley"
  },
  {
    name: "South Gate",
    id: "south-gate"
  },
  {
    name: "South San Francisco",
    id: "south-san-francisco"
  },
  {
    name: "Stockton",
    id: "stockton"
  },
  {
    name: "Sunnyvale",
    id: "sunnyvale"
  },
  {
    name: "Torrance",
    id: "torrance"
  },
  {
    name: "Tracy",
    id: "tracy"
  },
  {
    name: "Turlock",
    id: "turlock"
  },
  {
    name: "Tustin",
    id: "tustin"
  },
  {
    name: "Union City",
    id: "union-city"
  },
  {
    name: "Vacaville",
    id: "vacaville"
  },
  {
    name: "Vallejo",
    id: "vallejo"
  },
  {
    name: "Ventura",
    id: "ventura"
  },
  {
    name: "Visalia",
    id: "visalia"
  },
  {
    name: "Walnut Creek",
    id: "walnut-creek"
  },
  {
    name: "West Covina",
    id: "west-covina"
  },
  {
    name: "Westminster",
    id: "westminster"
  },
  {
    name: "Whittier",
    id: "whittier"
  }
];
