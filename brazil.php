class RootObject
{
	/** @var RootObject[] */
	public array $rootObject;

	/**
	 * @param RootObject[] $rootObject
	 */
	public function __construct(array $rootObject)
	{
		$this->rootObject = $rootObject;
	}
}

class RootObject
{
	public string $name;
	/** @var string[] */
	public array $topLevelDomain;
	public string $alpha2Code;
	public string $alpha3Code;
	/** @var string[] */
	public array $callingCodes;
	public string $capital;
	/** @var string[] */
	public array $altSpellings;
	public string $subregion;
	public string $region;
	public int $population;
	/** @var int[] */
	public array $latlng;
	public string $demonym;
	public int $area;
	public float $gini;
	/** @var string[] */
	public array $timezones;
	/** @var string[] */
	public array $borders;
	public string $nativeName;
	public string $numericCode;
	public Flags $flags;
	/** @var Currencies[] */
	public array $currencies;
	/** @var Languages[] */
	public array $languages;
	public Translations $translations;
	public string $flag;
	/** @var RegionalBlocs[] */
	public array $regionalBlocs;
	public string $cioc;
	public bool $independent;

	/**
	 * @param string[] $topLevelDomain
	 * @param string[] $callingCodes
	 * @param string[] $altSpellings
	 * @param int[] $latlng
	 * @param string[] $timezones
	 * @param string[] $borders
	 * @param Currencies[] $currencies
	 * @param Languages[] $languages
	 * @param RegionalBlocs[] $regionalBlocs
	 */
	public function __construct(
		string $name,
		array $topLevelDomain,
		string $alpha2Code,
		string $alpha3Code,
		array $callingCodes,
		string $capital,
		array $altSpellings,
		string $subregion,
		string $region,
		int $population,
		array $latlng,
		string $demonym,
		int $area,
		float $gini,
		array $timezones,
		array $borders,
		string $nativeName,
		string $numericCode,
		Flags $flags,
		array $currencies,
		array $languages,
		Translations $translations,
		string $flag,
		array $regionalBlocs,
		string $cioc,
		bool $independent
	) {
		$this->name = $name;
		$this->topLevelDomain = $topLevelDomain;
		$this->alpha2Code = $alpha2Code;
		$this->alpha3Code = $alpha3Code;
		$this->callingCodes = $callingCodes;
		$this->capital = $capital;
		$this->altSpellings = $altSpellings;
		$this->subregion = $subregion;
		$this->region = $region;
		$this->population = $population;
		$this->latlng = $latlng;
		$this->demonym = $demonym;
		$this->area = $area;
		$this->gini = $gini;
		$this->timezones = $timezones;
		$this->borders = $borders;
		$this->nativeName = $nativeName;
		$this->numericCode = $numericCode;
		$this->flags = $flags;
		$this->currencies = $currencies;
		$this->languages = $languages;
		$this->translations = $translations;
		$this->flag = $flag;
		$this->regionalBlocs = $regionalBlocs;
		$this->cioc = $cioc;
		$this->independent = $independent;
	}
}

class Flags
{
	public string $svg;
	public string $png;

	public function __construct(string $svg, string $png)
	{
		$this->svg = $svg;
		$this->png = $png;
	}
}

class Currencies
{
	public string $code;
	public string $name;
	public string $symbol;

	public function __construct(
		string $code,
		string $name,
		string $symbol
	) {
		$this->code = $code;
		$this->name = $name;
		$this->symbol = $symbol;
	}
}

class Languages
{
	public string $iso639_1;
	public string $iso639_2;
	public string $name;
	public string $nativeName;

	public function __construct(
		string $iso639_1,
		string $iso639_2,
		string $name,
		string $nativeName
	) {
		$this->iso639_1 = $iso639_1;
		$this->iso639_2 = $iso639_2;
		$this->name = $name;
		$this->nativeName = $nativeName;
	}
}

class Translations
{
	public string $br;
	public string $pt;
	public string $nl;
	public string $hr;
	public string $fa;
	public string $de;
	public string $es;
	public string $fr;
	public string $ja;
	public string $it;
	public string $hu;

	public function __construct(
		string $br,
		string $pt,
		string $nl,
		string $hr,
		string $fa,
		string $de,
		string $es,
		string $fr,
		string $ja,
		string $it,
		string $hu
	) {
		$this->br = $br;
		$this->pt = $pt;
		$this->nl = $nl;
		$this->hr = $hr;
		$this->fa = $fa;
		$this->de = $de;
		$this->es = $es;
		$this->fr = $fr;
		$this->ja = $ja;
		$this->it = $it;
		$this->hu = $hu;
	}
}

class RegionalBlocs
{
	public string $acronym;
	public string $name;
	/** @var string[] */
	public array $otherAcronyms;
	/** @var string[] */
	public array $otherNames;

	/**
	 * @param string[] $otherAcronyms
	 * @param string[] $otherNames
	 */
	public function __construct(
		string $acronym,
		string $name,
		array $otherAcronyms,
		array $otherNames
	) {
		$this->acronym = $acronym;
		$this->name = $name;
		$this->otherAcronyms = $otherAcronyms;
		$this->otherNames = $otherNames;
	}
}