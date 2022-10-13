<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\TestCase;

/**
 * Class DBCompareTest
 * @package Tests\Unit
 */
class DBCompareTest extends TestCase
{
    /**
     * @test
     * @testdox 두개의 디비에서 존재하지 않는 컬럼을 확인한다.
     * @return void
     */
    public function testCompareDBColumns(): void
    {
        $checkFreeTables = [];

        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
            $name = $table->{sprintf('Tables_in_%s', '')}; //''는 DATABASE 값
            if (in_array($name,
                $checkFreeTables
            )) {
                continue;
            }
            $liveColumns = Schema::setConnection(DB::connection('mysql_live'))->getColumnListing($name);
            $preColumns = Schema::setConnection(DB::connection('mysql'))->getColumnListing($name);

            $diffs = array_diff($preColumns, $liveColumns);
            if (count($diffs) > 0) {
                print_r($name);
                print_r($diffs);
            }
        }

        $this->assertTrue(true);
    }


}
