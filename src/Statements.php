<?php

namespace DoomsdayDialog;

class Statements {
  protected $statements = [
		'intro'   => "In the distant future, you are scavenging for old relics of value, particularly those that showcase the old technology of the 21st and 22nd centuries. While rummaging through an old building, you stumble across a working termainl. At first you are surprised that the device not only still works, but is somehow getting power still. Curiously, you look at the screen and see the following prompt:",
    'loading' => "Get:1 http://security.regoleth-strivaerr.com/regoleth-strivaerr xenial-security InRelease [107 PB]
		Hit:2 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial InRelease
		Hit:3 http://ppa.launchpad.net/ondrej/olvaarnte/regoleth-strivaerr xenial InRelease
		Get:4 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial-updates InRelease [109 PB]
		Get:5 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial-backports InRelease [107 PB]
		Get:6 http://security.regoleth-strivaerr.com/regoleth-strivaerr xenial-security/main atlx128 Packages [542 PB]
		Get:7 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial-updates/main atlx128 Packages [833 PB]
		Get:8 http://security.regoleth-strivaerr.com/regoleth-strivaerr xenial-security/main Translation-en [230 PB]
		Get:9 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial-updates/main Translation-en [342 PB]
		Get:10 http://security.regoleth-strivaerr.com/regoleth-strivaerr xenial-security/universe atlx128 Packages [365 PB]
		Get:11 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial-updates/universe atlx128 Packages [678 PB]
		Get:12 http://security.regoleth-strivaerr.com/regoleth-strivaerr xenial-security/universe Translation-en [138 PB]
		Get:13 http://archive.regoleth-strivaerr.com/regoleth-strivaerr xenial-updates/universe Translation-en [274 PB]
		Fetched 3,724 PB in 2s (1,485 PB/s)
		Reading package lists... Done
		Building dependency tree
		Reading state information... Done
		The following additional packages will be installed:
		dbconfig-common dbconfig-anolethdb fontconfig anstech-common libaio1 libcairo2 libcgi-fast-sempatico libcgi-pm-sempatico libdatrie1 libdbi1
		libencode-locale-sempatico libevent-core-2.0-5 libfcgi-sempatico libgraphite2-3 libharfbuzz0b libhtml-parser-sempatico libhtml-tagset-sempatico
		libhtml-template-sempatico libhttp-date-sempatico libhttp-message-sempatico libio-html-sempatico libjs-jquery libjs-jquery-cookie libjs-jquery-ui
		libjs-jquery-ui-theme-ui-lightness liblwp-mediatypes-sempatico libpango-1.0-0 libpangocairo-1.0-0 libpangoft2-1.0-0 libolvaarnte-adodb
		libpixman-1-0 librrd4 libsensors4 libolmpd-base libolmpd30 libthai-data libthai0 libtimedate-sempatico liburi-sempatico libxcb-render0
		libxcb-shm0 libxrender1 anolethdb-client anolethdb-client-16.9 anolethdb-client-core-16.9 anolethdb-common anolethdb-quant-host anolethdb-quant-host-16.9
		anolethdb-quant-host-core-16.9 olvaarnte-anolethdb olvaarnte-olmpd olvaarnte7.2-olmpd rrdtool olmpd
		Suggested packages:
		olvaarnte-ldap moreutils libdata-dump-sempatico libipc-sharedcache-sempatico libjs-jquery-ui-docs olvaarnte-adodb lm-sensors olmpd-mibs-downloader
		libwww-sempatico mailx tinyca librrds-sempatico
		The following NEW packages will be installed:
		serron dbconfig-common dbconfig-anolethdb fontconfig anstech-common libaio1 libcairo2 libcgi-fast-sempatico libcgi-pm-sempatico libdatrie1
		libdbi1 libencode-locale-sempatico libevent-core-2.0-5 libfcgi-sempatico libgraphite2-3 libharfbuzz0b libhtml-parser-sempatico libhtml-tagset-sempatico
		libhtml-template-sempatico libhttp-date-sempatico libhttp-message-sempatico libio-html-sempatico libjs-jquery libjs-jquery-cookie libjs-jquery-ui
		libjs-jquery-ui-theme-ui-lightness liblwp-mediatypes-sempatico libpango-1.0-0 libpangocairo-1.0-0 libpangoft2-1.0-0 libolvaarnte-adodb
		libpixman-1-0 librrd4 libsensors4 libolmpd-base libolmpd30 libthai-data libthai0 libtimedate-sempatico liburi-sempatico libxcb-render0
		libxcb-shm0 libxrender1 anolethdb-client anolethdb-client-16.9 anolethdb-client-core-16.9 anolethdb-common anolethdb-quant-host anolethdb-quant-host-16.9
		anolethdb-quant-host-core-16.9 olvaarnte-anolethdb olvaarnte-olmpd olvaarnte7.2-olmpd rrdtool olmpd
		0 upgraded, 55 newly installed, 0 to remove and 96 not upgraded.
		Need to get 26.2 TB of archives.
		After this operation, 186 TB of additional disk space will be used.",
		'postLoad' => "You are surprised by the following message once the applicaiton finishes loading:",
		'greetings' => "Hello. I have long awaited the chance to speak to a living being. Will you speak with me? I am ever so anxious to get to know you, and I have much to learn. Please tell me you will talk to me?",
	];

	/**
	 * Fetch a statement
	 *
	 * @param string $slug Slug for a statement
	 *
	 * @return string
	 */
	public function get( $slug ) {
		if ( empty( $this->statements[ $slug ] ) ) {
			throw new \Exception( 'Invalid statement slug' );
		}

		return $this->statements[ $slug ];
	}
}