<?php
use Illuminate\Http\Response;

function make_seq($length)
{
	$nucl = [ "A", "C", "T", "G" ];
	$data = "";

	for( $i=0; $i<$length; $i++ ) {

		$randInt = rand( 0, 3 );
		$data = $data.$nucl[$randInt];
	}

	return $data;
}


function make_feat($refseq)
{
	$data = array(	array (
		      'end' => 9744,
		      'name' => $refseq.'.au9.g1002',
		      'score' => 0.84,
		      'start' => 5975,
		      'strand' => 1,
		      'type' => 'gene',
		      'uniqueID' => $refseq.'.au9.g1002',
		      'subfeatures' => 
		      array (
		        array (
		          'end' => 9744,
		          'name' => $refseq.'.au9.g1002.t1',
		          'score' => 0.84,
		          'start' => 5975,
		          'strand' => 1,
		          'subfeatures' => 
		          array (
		            array (
		              'end' => 6109,
		              'score' => 0.98,
		              'start' => 5975,
		              'strand' => 1,
		              'type' => 'five_prime_UTR',
		            ),
		            array (
		              'end' => 6112,
		              'phase' => 0,
		              'start' => 6110,
		              'strand' => 1,
		              'type' => 'start_codon',
		            ),
		            array (
		              'end' => 7319,
		              'phase' => 2,
		              'score' => 1,
		              'start' => 7142,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 7687,
		              'phase' => 1,
		              'score' => 1,
		              'start' => 7411,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 7850,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 7748,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8098,
		              'phase' => 2,
		              'score' => 1,
		              'start' => 7953,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8320,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 8166,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 6148,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 6110,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 6683,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 6615,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 7040,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 6758,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8614,
		              'phase' => 1,
		              'score' => 1,
		              'start' => 8419,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8811,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 8708,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 9239,
		              'phase' => 1,
		              'score' => 1,
		              'start' => 8927,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 9494,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 9414,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 9494,
		              'phase' => 0,
		              'start' => 9492,
		              'strand' => 1,
		              'type' => 'stop_codon',
		            ),
		            array (
		              'end' => 9744,
		              'score' => 0.84,
		              'start' => 9495,
		              'strand' => 1,
		              'type' => 'three_prime_UTR',
		            ),
		          ),
		          'type' => 'mRNA',
		          'uniqueID' => $refseq.'.au9.g1002.t2',
		        ),
		        array (
		          'end' => 9744,
		          'name' => $refseq.'.au9.g1002.t2',
		          'score' => 0.84,
		          'start' => 5975,
		          'strand' => 1,
		          'subfeatures' => 
		          array (
		            array (
		              'end' => 6109,
		              'score' => 0.98,
		              'start' => 5975,
		              'strand' => 1,
		              'type' => 'five_prime_UTR',
		            ),
		            array (
		              'end' => 6112,
		              'phase' => 0,
		              'start' => 6110,
		              'strand' => 1,
		              'type' => 'start_codon',
		            ),
		            array (
		              'end' => 6148,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 6110,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 6683,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 6615,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 7040,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 6758,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8320,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 8166,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8614,
		              'phase' => 1,
		              'score' => 1,
		              'start' => 8419,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 8811,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 8708,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 9239,
		              'phase' => 1,
		              'score' => 1,
		              'start' => 8927,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 9494,
		              'phase' => 0,
		              'score' => 1,
		              'start' => 9414,
		              'strand' => 1,
		              'type' => 'CDS',
		            ),
		            array (
		              'end' => 9494,
		              'phase' => 0,
		              'start' => 9492,
		              'strand' => 1,
		              'type' => 'stop_codon',
		            ),
		            array (
		              'end' => 9744,
		              'score' => 0.84,
		              'start' => 9495,
		              'strand' => 1,
		              'type' => 'three_prime_UTR',
		            ),
		          ),
		          'type' => 'mRNA',
		          'uniqueID' => $refseq.'.au9.g1002.t2',
	        	),
	      	),
		),
	);
	return $data;
}


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


	/********GLOBAL VARIABLES****************/

function namesGlobal()
{
	$CHROM_NAMES = ["chrA", "chrB", "chrX"];
	return $CHROM_NAMES;
}


function seqsGlobal()
{
	$seqs = array();

	$CHROM_NAMES = namesGlobal();
	foreach ($CHROM_NAMES as $key) {
		$seqs[$key]=make_seq(rand(10000, 30000));
	}
	return $seqs;
}


function featuresGlobal()
{
	$features = array();
	$CHROM_NAMES = namesGlobal();
	foreach ($CHROM_NAMES as $key) {
		$data=make_feat($key);
		$features[$key] = $data;
	}
	return $features;
}





$router->get('/refSeqs', function (\Illuminate\Http\Request $request) use ($router) 
{
	$seqs = seqsGlobal();
	$resp = array();

	foreach (array_keys($seqs) as $key) {

		$data = array('length' => strlen($seqs[$key]), 'name' => $key, 'start' => 0, 'end' => strlen($seqs[$key]), 'seqChunkSize' => 20000);
		array_push($resp, $data);
	}

	//$jsonContent = getJSON( "refSeqs.json" );
	return response()->json($resp);
});


$router->get('/stats/global', function (\Illuminate\Http\Request $request) use ($router) {

	$data = array('featureDensity' => 0.02);

	return response()->json( $data );
});


$router->get('/names', function (\Illuminate\Http\Request $request) use ($router)
{
	$features = featuresGlobal();
	$CHROM_NAMES = namesGlobal();
	$resp = array();

	if ( $request->has('equals') ) {

		foreach ( $CHROM_NAMES as $key ) {

			foreach ( $features[$key] as $f ) {

				if( $f['name'] === $request->input('equals') ){

					$resp=array_push($resp,feat2searchLoc($key, $f));
				}
			}
		}
	}
	elseif ( $request->has('startswith') ) {

		foreach ( $CHROM_NAMES as $key ) {

			foreach ( $features[$key] as $f ) {

				if ($request->has('equals')){

					array_push($data,feat2searchLoc($key, $f));
				}
			}
		}
	}
	json_encode($resp);
	return response()->json( $resp );
});


$router->get('/features/{refseq}', function ($refseq, \Illuminate\Http\Request $request) use ($router) {


	$features = featuresGlobal();

	if ( $request->has('sequence') ) {

		$start = intval( $request->input('start') );
		$end = intval( $request->input('end') );
		$data = array('features' => array('seq' => '','start' => $start, 'end' => $end) );
	}
	else
	{
		$data = array('features' => $features[$refseq]);
	}
	return response()->json( $data );
});


function getJSON( $filepath ) {
	
	$rawDir = __DIR__."/../raw/"; //raw part replaced by a conf maybe
	
	$jsonContent = file_get_contents( $rawDir.$filepath );
	
	return $jsonContent;
}

/*function startsWith($haystack, $needle)
{
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
}
*/
