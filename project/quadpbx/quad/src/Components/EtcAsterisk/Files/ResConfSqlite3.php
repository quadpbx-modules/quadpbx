<?php

namespace QuadPBX\Components\EtcAsterisk\Files;

use QuadPBX\Interfaces\EtcAsteriskFile;

class ResConfSqlite3 extends EtcAsteriskFile
{
    /**
     * Create the sqlite database file if it does not exist. This
     * should probably also tie into restores, too.
     *
     * @return void
     */
    protected function updateBeforeWrite()
    {
        // Check to see if the SQLite3 database exists
        $dbfile = $this->sections['asterisk']['content']['dbfile']['value'];
        if (!file_exists($dbfile)) {
            print "Creating SQLite3 database file: $dbfile\n";
            touch($dbfile);
            chmod($dbfile, 0666);
        }
    }
}
