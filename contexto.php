<?php 
	$texto = 'amor amo';
	//en las base de dato no puede haber palabras repetidas para no distorcionar el algoritmo
	$baseAmor = 'amor quiero amo vida sol cariño bueno amar amando amado amas ama amamos amáis aman amás amaba amabas amaba amábamos amabais amaban amabas amé simpatía amaste amó amamos amasteis amaron amaste amaré amarás amará amaremos amaréis amarán amarás amaría amarías amaría amaríamos amaríais amarían amarías ame ames amemos flechazo améis amen ames amés amara amase amaras amases amara amase amáramos amásemos amistad amarais amaseis amaran amasen admiración estima respeto adoración devoción veneración culto idoloatría fervor pasión amaras amases ama ame amemos amad amen amá amare amares amare amáremos amareis amaren amares admirar admirando admirado admiro admiras admira admiramos admiráis admiran admirás admiraba admirabas admiraba admirábamos admirabais admiraban admirabas admiré admiraste admiró admiramos admirasteis admiraron admiraste admiraré admirarás admirará admiraremos admiraréis admirarán admirarás admiraría admirarías admiraría admiraríamos admiraríais admirarían admirarías admire admires admire admiremos admiréis admiren admires admirés admirara o admirase admiraras admirases admirara admirase admiráramos admirásemos admirarais admiraseis admiraran admirasen admiraras admirases admirare admirares admira admire admiremos admirad admiren admirá admirare estimar estimando estimado admiráremos admirareis admiraren admirares estimo estimas estima estimamos estimáis estiman estimás estimaba estimabas estimaba estimábamos estimabais estimaban estimabas estimé estimaste estimó estimamos estimasteis estimaron estimaste estimaré estimarás estimará estimaremos estimaréis estimarán estimarás estimaría estimarías estimaría estimaríamos estimaríais estimarían estimarías estime estimes estime estimemos estiméis estimen estimes estimés estimara o estimase estimaras estimases estimara estimase estimáramos estimásemos estimarais estimaseis estimaran estimasen estimaras estimases estimare estimares estimare estima estime estimemos estimad estimen estimá estimáremos estimareis estimaren estimares respetar respetando respetado respeto respetas respeta respetamos respetáis respetan respetás respetaba respetabas respetaba respetábamos respetabais respetaban respetabas respeté respetaste respetó respetamos respetasteis respetaron respetaste respetaré respetarás respetará respetaremos respetaréis respetarán respetarás respetaría respetarías respetaría respetaríamos respetaríais respetarían respetarías respete respetes respete respetemos respetéis respeten respetes respetés respetara respetase respetaras respetases respetara respetase respetáramos respetásemos respetarais respetaseis respetaran respetasen respetaras respetases respetare respetares respetare respetáremos respetareis respetaren respetares respeta respete respetemos respetad respeten respetá adorar adorando adorado adoro adoras adora adoramos adoráis adoran adorás adoraba adorabas adoraba adorábamos adorabais adoraban adorabas adoré adoraste adoró adoramos adorasteis adoraron adoraste adoraré adorarás adorará adoraremos adoraréis adorarán adorarás adoraría adorarías adoraría adoraríamos adoraríais adorarían adorarías adore adores adore adoremos adoréis adoren adores adorés adorara adorase adoraras adorases adorara adorase adoráramos adorásemos adora adore adoremos adorad adoren adorá adorarais adoraseis adoraran adorasen adoraras adorases adorare adorares adorare adoráremos adorareis adoraren adorares venerar venerando venerado venero veneras venera veneramos veneráis veneran venerás veneraba venerabas veneraba venerábamos venerabais veneraban venerabas veneré veneraste veneró veneramos venerasteis veneraron veneraste veneraré venerarás venerará veneraremos veneraréis venerarán venerarás veneraría venerarías veneraría veneraríamos veneraríais venerarían venerarías venere veneres venere veneremos veneréis veneren veneres venerés venerara venerase veneraras venerases venerara venerase veneráramos venerásemos venerarais veneraseis veneraran venerasen veneraras venerases venerare venerares venerare veneráremos venerareis veneraren venerares venera venere veneremos venerad veneren venerá idolatrar idolatrando idolatrado idolatro idolatras idolatra idolatramos idolatráis idolatran idolatrás idolatraba idolatrabas idolatraba idolatrábamos idolatrabais idolatraban idolatrabas idolatré idolatraste idolatró idolatramos idolatrasteis idolatraron idolatraste idolatraré idolatrarás idolatrará idolatraremos idolatraréis idolatrarán idolatrarás idolatraría idolatrarías idolatraría idolatraríamos idolatraríais idolatrarían idolatrarías idolatre idolatres idolatre idolatremos idolatréis idolatren idolatres idolatrés idolatrara idolatrase idolatraras idolatrases idolatrara idolatrase idolatráramos idolatrásemos idolatrarais idolatraseis idolatraran idolatrasen idolatraras idolatrases idolatrare idolatrares idolatrare amistad idolatráremos idolatrareis idolatraren idolatrares idolatra cariño idolatre idolatremos idolatrad idolatren idolatrá aprecio enamorar enamorando enamorado enamoro enamoras enamora enamoramos enamoráis enamoran enamorás enamoraba enamorabas enamoraba enamorábamos enamorabais enamoraban enamorabas enamoré enamoraste enamoró enamoramos enamorasteis enamoraron enamoraste enamoraré enamorarás enamorará enamoraremos enamoraréis enamorarán enamorarás enamoraría enamorarías enamoraría enamoraríamos enamoraríais enamorarían enamorarías enamore enamores enamore enamoremos enamoréis enamoren enamores enamorés enamorara enamorase enamoraras enamorases enamorara enamorase enamoráramos enamorásemos enamorarais enamoraseis enamoraran enamorasen enamoraras enamorases enamorare enamorares enamorare enamoráremos enamorareis enamoraren enamorares enamora enamore enamoremos enamorad enamoren enamorá';
	$baseOdio = 'odio ira estupido malo desgraciado cruel';
	$baseSeguridad = 'seguridad tranquilo tranquila';
	$baseMiedo = 'miedo';
	$baseAlegria = 'alegria alegre alegras';
	$baseTristeza = 'tristeza';
	//este programa registra las veces que se repite las palabras en la base de dato segun el texto ingresado por el
	//usuario
	function contar($elementoAcontar,$baseDato){
		$minuscula = strtolower($elementoAcontar);//todas las palabras se formatean aminusculas
		$textoLimpio = preg_replace('([^A-Z a-z])', '', $minuscula);//se formatea el texto a solo palabras
		$var1 = explode(" ",$textoLimpio);
		$var2 = explode(" ",$baseDato);
		
		$contador = 0;
		for($i = 0;$i < count($var1);$i++){
			$elemento1 = $var1[$i];

			for($j = 0;$j <count($var2);$j++){
				$elemento2 = $var2[$j];

				if ($elemento1 == $elemento2) {
					$contador = $contador + 1;
				}
			}
		}
		return $contador;
	}
	//fin del contador de repeticiones

	$amor = contar($texto,$baseAmor);
	$odio = contar($texto,$baseOdio);
	$seguridad = contar($texto,$baseSeguridad);
	$miedo = contar($texto,$baseMiedo);
	$alegria = contar($texto,$baseAlegria);
	$tristeza = contar($texto,$baseTristeza);

	$sumaBases = $amor + $odio + $seguridad + $miedo + $alegria + $tristeza ;

	function resultadosBase($bd){
		$varBase = explode(' ', $bd);
		$resul = count($varBase);
		return $resul;
	}

	function porcentaje($num = null,$porce = null){
		if($num != null){
			$oper = round($porce * 100 / $num);
			return $oper;
		}
	}

	//medicion de coincidencias en porcentaje
	$resTexto = resultadosBase($texto);
	$porAmor = porcentaje($sumaBases,$amor);
	$porOdio = porcentaje($sumaBases,$odio);
	$porSeguridad = porcentaje($sumaBases,$seguridad);
	$porMiedo = porcentaje($sumaBases,$miedo);
	$porAlegria = porcentaje($sumaBases,$alegria);
	$porTristeza = porcentaje($sumaBases,$tristeza);
	echo 'La respuesta del algoritmo IA al texto: <br><br><p class="citas">"'.$texto.'"</p><br>Es: ';
	//fin medidor de coincidencias


	if($amor > $odio){
		echo "Tu si me amas!!!";
	}elseif ($amor < $odio) {
		echo "Tu me odias";
	}else{
		echo 'sin coincidencias';
	}
	echo '<br>';

	if($seguridad > $miedo){
		echo "Tu si me das seguridad";
	}elseif ($seguridad < $miedo) {
		echo "Tu me das miedo";
	}else{
		echo 'sin coincidencias';
	}
	echo '<br>';

	if($alegria > $tristeza){
		echo "Tu si me alegras";
	}elseif ($alegria < $tristeza) {
		echo "Tu me pones triste";
	}else{
		echo 'sin coincidencias';
	}
	echo '<br>';

	echo '<hr>';
	echo 'El texto ingresado incluye '.$resTexto.' palabras';
	salto();
	echo 'La suma de las bases es: '.$sumaBases.' coincidencias.';
	salto();
	echo 'Amor tiene '.$amor.' coincidencias.<br>';
	echo 'Odio tiene '.$odio.' coincidencias.<br>';
	echo 'Seguridad tiene '.$seguridad.' coincidencias.<br>';
	echo 'Miedo tiene '.$miedo.' coincidencias.<br>';
	echo 'Alegria tiene '.$alegria.' coincidencias.<br>';
	echo 'Tristeza tiene '.$tristeza.' coincidencias.<br>';
	salto();
	echo 'El porcentaje de coincidencias de amor es = '.$porAmor.'%<br>';
	echo 'El porcentaje de coincidencias de odio es = '.$porOdio.'%<br>';
	echo 'El porcentaje de coincidencias de seguridad es = '.$porSeguridad.'%<br>';
	echo 'El porcentaje de coincidencias de miedo es = '.$porMiedo.'%<br>';
	echo 'El porcentaje de coincidencias de alegria es = '.$porAlegria.'%<br>';
	echo 'El porcentaje de coincidencias de tristeza es = '.$porTristeza.'%<br>';

?>
<!-- Solo es una idea el codigo no esta terminado -->
