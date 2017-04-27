<?php

namespace DataValues\Tests;

use DataValues\MonolingualTextValue;

/**
 * @covers DataValues\MonolingualTextValue
 *
 * @since 0.1
 *
 * @group DataValue
 * @group DataValueExtensions
 *
 * @license GPL-2.0+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class MonolingualTextValueTest extends DataValueTest {

	/**
	 * @see DataValueTest::getClass
	 *
	 * @return string
	 */
	public function getClass() {
		return 'DataValues\MonolingualTextValue';
	}

	public function validConstructorArgumentsProvider() {
		$argLists = [];

		$argLists[] = [ 'en', 'foo' ];
		$argLists[] = [ 'en', ' foo bar baz foo bar baz foo bar baz foo bar baz foo bar baz foo bar baz ' ];

		return $argLists;
	}

	public function invalidConstructorArgumentsProvider() {
		$argLists = [];

		$argLists[] = [ 42, null ];
		$argLists[] = [ [], null ];
		$argLists[] = [ false, null ];
		$argLists[] = [ true, null ];
		$argLists[] = [ null, null ];
		$argLists[] = [ 'en', 42 ];
		$argLists[] = [ 'en', false ];
		$argLists[] = [ 'en', [] ];
		$argLists[] = [ 'en', null ];
		$argLists[] = [ '', 'foo' ];

		return $argLists;
	}

	/**
	 * @dataProvider instanceProvider
	 * @param MonolingualTextValue $text
	 * @param array $arguments
	 */
	public function testGetText( MonolingualTextValue $text, array $arguments ) {
		$this->assertEquals( $arguments[1], $text->getText() );
	}

	/**
	 * @dataProvider instanceProvider
	 * @param MonolingualTextValue $text
	 * @param array $arguments
	 */
	public function testGetLanguageCode( MonolingualTextValue $text, array $arguments ) {
		$this->assertEquals( $arguments[0], $text->getLanguageCode() );
	}

}
