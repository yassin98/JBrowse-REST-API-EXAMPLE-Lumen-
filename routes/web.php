<?php

$router->get('/', function () use ($router) {
	/*$CHROM_NAMES = ["chrA", "chrB", "chrX"];
    $seqs = array();
    $data = array();
	for($i=0;$i<count($CHROM_NAMES);$i++)
    {
    	$seqs[$CHROM_NAMES[$i]] = rand(10000, 30000);
 	}*/
});


$router->get('/refSeqs', function () use ($router) 
{
	//$CHROM_NAMES = ["chrA", "chrB", "chrX"];
	$CHROM_NAMES=config('variables.CHROM_NAMES');

    $seqs = array();
    $data = array();
    for($i=0;$i<count($CHROM_NAMES);$i++)
    {
    	$seqs[$CHROM_NAMES[$i]] = rand(10000, 30000);
		$date = array('length' => $seqs[$CHROM_NAMES[$i]],
				      'name' => $CHROM_NAMES[$i],
		              'start' => 0,
		              'end' => $seqs[$CHROM_NAMES[$i]],
		              'seqChunkSize' =>20000);
		array_push($data,$date);
 	}
	return response()->json( $data );
});

$router->get('/stats/global', function () use ($router) {

	$data = array('featureDensity' => 0.02);

	return response()->json( $data );
});

/*$router->get('/features/<refseq>', function () use ($router) {

	if($_GET['sequence'] === 'true')
	{
		echo "hola";
	}*/

//});
function feat2searchLoc($key, $f)
{
	$location  = array( 'ref' => $key,
			            'start' => $f['start'],
			            'end' => $f['end'],
			            'tracks' => '',
			        	'objectName' => $f['name']);
	$result = array('name' => $f['name'] , 'location' => $location);
	return $result;
}

$router->get('/names', function () use ($router) {

	$data = array();
	/*if($_GET['equals']){

		for($i=0;$i<count($CHROM_NAMES);$i++)
		{

		}
	}
	elseif ($_GET["startswith"]){

		for($i=0;$i<count($CHROM_NAMES);$i++)
		{

		}	
	}*/
	return response()->json( $data );
});