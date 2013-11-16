<?php

return array(
	'ValueFormatters\ValueFormatterFactory' => 'src/ValueFormatters/ValueFormatterFactory.php',

	'ValueFormatters\IriFormatter' => 'src/ValueFormatters/IriFormatter.php',
	'ValueFormatters\QuantityFormatter' => 'src/ValueFormatters/QuantityFormatter.php',
	'ValueFormatters\StringFormatter' => 'src/ValueFormatters/StringFormatter.php',

	'ValueFormatters\Test\ValueFormatterFactoryTest' => 'tests/ValueFormatters/ValueFormatterFactoryTest.php',



	'ValueParsers\ValueParserFactory' => 'src/ValueParsers/ValueParserFactory.php',
	'ValueParsers\ApiParseValue' => 'src/ValueParsers/ApiParseValue.php',

	'ValueParsers\BoolParser' => 'src/ValueParsers/BoolParser.php',
	'ValueParsers\NullParser' => 'src/ValueParsers/NullParser.php',
	'ValueParsers\StringValueParser' => 'src/ValueParsers/StringValueParser.php',

	'ValueParsers\Test\StringValueParserTest' => 'tests/ValueParsers/StringValueParserTest.php',
	'ValueParsers\Test\ValueParserTestBase' => 'tests/ValueParsers/ValueParserTestBase.php',



	'ValueValidators\ValueValidatorFactory' => 'src/ValueValidators/ValueValidatorFactory.php',

	'ValueValidators\DimensionValidator' => 'src/ValueValidators/DimensionValidator.php',
	'ValueValidators\ListValidator' => 'src/ValueValidators/ListValidator.php',
	'ValueValidators\NullValidator' => 'src/ValueValidators/NullValidator.php',
	'ValueValidators\RangeValidator' => 'src/ValueValidators/RangeValidator.php',
	'ValueValidators\StringValidator' => 'src/ValueValidators/StringValidator.php',
	'ValueValidators\TitleValidator' => 'src/ValueValidators/TitleValidator.php',



	'DataValues\IriValue' => 'src/DataValues/IriValue.php',
	'DataValues\MonolingualTextValue' => 'src/DataValues/MonolingualTextValue.php',
	'DataValues\MultilingualTextValue' => 'src/DataValues/MultilingualTextValue.php',
);
