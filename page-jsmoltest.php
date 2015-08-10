<?php
/**
 * Template Name: Test Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vmmm
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<script type="text/javascript">
var themePath = "<?php echo get_template_directory_uri(); ?>";
Jmol._isAsync = false; 

// last update 2/18/2014 2:10:06 PM

var jmolApplet0; // set up in HTML table, below

// logic is set by indicating order of USE -- default is HTML5 for this test page, though

var s = document.location.search;

// Developers: The _debugCode flag is checked in j2s/core/core.z.js, 
// and, if TRUE, skips loading the core methods, forcing those
// to be read from their individual directories. Set this
// true if you want to do some code debugging by inserting
// System.out.println, document.title, or alert commands
// anywhere in the Java or Jmol code.

Jmol._debugCode = (s.indexOf("debugcode") >= 0);

jmol_isReady = function(applet) {
	document.title = (applet._id + " - Jmol " + Jmol.___JmolVersion)
	Jmol._getElement(applet, "appletdiv").style.border="1px solid blue"
}		

var Info = {
	width: 300,
	height: 300,
	debug: false,
	color: "0xFFFFFF",
	addSelectionOptions: true,
	use: "HTML5",   // JAVA HTML5 WEBGL are all options
	j2sPath: themePath+"/jsmol/j2s", // this needs to point to where the j2s directory is.
	jarPath: themePath+"/jsmol/java",// this needs to point to where the java directory is.
	jarFile: "JmolAppletSigned.jar",
	isSigned: true,
	script: "set antialiasDisplay;load data/caffeine.mol",
	serverURL: "http://chemapps.stolaf.edu/jmol/jsmol/php/jsmol.php",
	readyFunction: jmol_isReady,
	disableJ2SLoadMonitor: true,
  disableInitialConsole: true,
  allowJavaScript: true
	//defaultModel: "$dopamine",
	//console: "none", // default will be jmolApplet0_infodiv, but you can designate another div here or "none"
}

$(document).ready(function() {
  $("#appdiv").html(Jmol.getAppletHtml("jmolApplet0", Info))
})
var lastPrompt=0;
</script>
</head>
<body>
<table width=1000 cellpadding=10>
<tr><td colspan=2 style="font-size:8pt">
<b><a href="http://jsmol.sourceforge.net">JSmol</a> is an HTML5/Java-switchable version of <a href="http://jmol.sourceforge.net">Jmol</a>.</b> For a zip file containing all the files in this directory, 
see <a href=http://chemapps.stolaf.edu/jmol/zip/Jmol.zip>http://chemapps.stolaf.edu/jmol/zip/Jmol.zip</a>. 

This page demonstrates Jmol using HTML5, Java, or WebGL.  
Credits:                           
WebGL interface written by <b>Takanori Nakane</b>. 
Java2Script written by <b>Zhou Renjian, et al.</b>
Jzlib written by <b>Atsuhiko Yamanaka</b>.
</td></tr>
<tr><td valign="top">
<div id="appdiv"></div>
<br>
<a href="javascript:Jmol.script(jmolApplet0,'console')">console</a>
<a href="javascript:Jmol.script(jmolApplet0,'image')">image</a>
display
<a href="javascript:Jmol.script(jmolApplet0,'set antialiasDisplay false')">faster</a>
<a href="javascript:Jmol.script(jmolApplet0,'set antialiasDisplay true')">sharper</a>
<br>
platformSpeed:
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 8')" title='all features'>8</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 7')" title='no antialiasing'>7</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 6')" title='no translucency'>6</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 5')" title='surfaces dotted'>5</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 4')" title='cartoons as trace'>4</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 3')" title='geosurfaces as dots'>3</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 2')" title='ellipsoids as dots'>2</a>
<a href="javascript:Jmol.script(jmolApplet0,'set platformSpeed 1')" title='wireframe only'>1</a>
<br>
info <a href="javascript:Jmol.showInfo(jmolApplet0, true)">show</a>
<a href="javascript:Jmol.clearConsole(jmolApplet0)">clear</a>
<a href="javascript:Jmol.showInfo(jmolApplet0, false)">hide</a>

<br><a href="javascript:Jmol.script(jmolApplet0,'select *;cartoons off;spacefill only')">spacefill</a>
<a href="javascript:Jmol.script(jmolApplet0,'select *;cartoons off;wireframe -0.1')">wire</a>
<a href="javascript:Jmol.script(jmolApplet0,'select *;cartoons off;spacefill 23%;wireframe 0.15')">ball&amp;stick</a>
<a href="javascript:Jmol.script(jmolApplet0,'select protein or nucleic;cartoons only')">cartoons</a>
<a href="javascript:Jmol.script(jmolApplet0,'set cartoonFancy true')">fancy</a>
<a href="javascript:Jmol.script(jmolApplet0,'set cartoonFancy false')">not</a>
<a href="javascript:Jmol.script(jmolApplet0,'set cartoonFancy false;set hermitelevel 0')">flat</a>

<br><a href="javascript:Jmol.script(jmolApplet0,'color property atomno')">color atomno</a>
<a href="javascript:Jmol.script(jmolApplet0,'color cpk')">color cpk</a>
<a href="javascript:Jmol.script(jmolApplet0,'color structure')">color structure</a>
<br>
<a href="javascript:Jmol.script(jmolApplet0,'select *;isosurface vdw')">isosurface vdw</a>
<a href="javascript:Jmol.script(jmolApplet0,'isosurface delete')">off</a>
<a href="javascript:Jmol.script(jmolApplet0,'if ({atomno < 10}.partialcharge == 0){calculate partialcharge};isosurface vdw map mep')">mep</a>
<a href="javascript:Jmol.script(jmolApplet0,'isosurface translucent')">translucent</a>
<a href="javascript:Jmol.script(jmolApplet0,'isosurface opaque')">opaque</a>


<br>
labels <a href="javascript:Jmol.script(jmolApplet0,'if (_fileType == &quot;Pdb&quot;){select *.CA;label %n%r}else{select *;label %a};select *;')">on</a>
<a href="javascript:Jmol.script(jmolApplet0,'select *;labels off')">off</a>
<a href="javascript:Jmol.script(jmolApplet0,'font echo 20 serif;fsize=20;set echo top center;echo echo test')">echo</a>
<a href="javascript:Jmol.script(jmolApplet0,'if (!fsize){fsize=20};fsize += 4;font echo @fsize serif;')">larger</a>
<a href="javascript:Jmol.script(jmolApplet0,'if (!fsize){fsize=20};fsize -= 4;if (fsize < 10){fsize = 10};font echo @fsize serif')">smaller</a>

</td><td valign=top>
<b>Try various buttons. If anything doesn't work please <a href=mailto:hansonr@stolaf.edu>let me know</a>.</b> 
<br /><br /> 

<span style="font-size:8pt">
Enter "!" and a command into the search box and press ENTER or open the <a href="javascript:Jmol.script(jmolApplet0,'console')">applet console</a> to execute a <a target=_blank href=http://chemapps.stolaf.edu/jmol/docs>script command</a>.
   </span>
<br /><br /> 
<table cellpadding=5><tr><td valign=top>
<br />

<b>keyword searches</b>
 <br />
 <a href="javascript:Jmol.search(jmolApplet0,'=caffeine?')">=caffeine? (RCSB)</a>
 <br />
 <a href="javascript:Jmol.search(jmolApplet0,'=1blu?')">=1blu? (RCSB)</a>
 <br />
 <a href="javascript:Jmol.search(jmolApplet0,'=1crn?')">=1crn? (RCSB)</a>
 <br /> 
 <br />  
 <a href=jsmol.htm?_USE=SIGNED>JSmol/Java</a>
 <br /> 
 <a href=jsmol.htm?_USE=HTML5>JSmol/HTML5</a> 
 <br /> 
 <a href=jsmolgl.htm>JSmol/WebGL</a> 
 <br /> 


</td><td valign=top>
	<b>this-domain calls</b>
<br />
 <a href="javascript:Jmol.script(jmolApplet0,'script spt/ext/bh/die.spt')">swipe gesture test</a>
<br />
 <a href="javascript:Jmol.script(jmolApplet0,'load =1blu; set echo top left;echo loading map file...;refresh;isosurface &quot;=1blu&quot; mesh nofill;echo;set zshade;set picking center;set zshadepower 5;wireframe -0.1; set pickcallback &quot;jmolScript: isosurface slab none slab within 5 @{pickedList[0]}&quot;')">EDS map test</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/1cbs.cif; set echo top left;echo loading map file...;refresh;isosurface downsample 2 cutoff 0.5 boundbox &quot;data/1cbs_2fofc.map&quot; mesh nofill;isosurface display within 2.0 {*};echo')">2.2MB EDM test</a>
<br />  
 local file <a href="javascript:Jmol.script(jmolApplet0,'load ?')">reading</a> <a href="javascript:Jmol.script(jmolApplet0,'write FILE ?')">writing</a>
  <a href="javascript:Jmol.script(jmolApplet0,'write PNGJ test.png')">saving(PNGJ)</a>
<br />
 <a href="javascript:Jmol.script(jmolApplet0,'!quit;script data/rabe.spt;')">make a nanotube</a>
<br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/c60af.mol;rotate x -60;delay 1;minimize')">minimize</a> 
 <a href="javascript:Jmol.script(jmolApplet0,'set modelkitmode;set picking dragMinimize')">drag-minimize</a>
 <a href="javascript:Jmol.script(jmolApplet0,'!quit;set modelkitmode false;set picking ident;')">!quit</a>
<br />
 <a href="javascript:Jmol.script(jmolApplet0,'script data/flexfit.spt')">flexible fit</a>
<br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/dna.pse')">PyMOL session - dna</a>
 <a href="javascript:Jmol.script(jmolApplet0,'load data/pp2.pse')">PP 2</a>
  <br />
  <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/estron.cml;display molecule=1;moveto /* time, axisAngle */ 0.0 { -569 -266 778 170.22} /* zoom, translation */ 210.8 0.0 0.0 /* center, rotationRadius */ {1.612277686904762 3.7877332476190473 1.6109263519047616} 16.399569513870535 /* navigation center, translation, depth */ {0 0 0} 9.485930041021248 -20.361702729557265 0;')">estron.cml</a>
 <a href="javascript:Jmol.script(jmolApplet0,'load data/vasp.xml')">vasp.xml</a>
 <a href="javascript:Jmol.script(jmolApplet0,'load data/water.xodydata')">water.xodydata</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'script data/test.spt;background black')">thread test</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myecho [50 100%];echo working...;refresh;isosurface delete;isosurface sasurface 0;echo;')">echo/surface test</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'pause')">pause</a>
 <a href="javascript:Jmol.script(jmolApplet0,'resume')">resume</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'!quit')">!quit</a>
 <a href="javascript:Jmol.script(jmolApplet0,'!exit')">!exit</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/caffeine.mol;if (random() > 0.3){moveto 1 left}else if (random() > 0.7) {moveto 1 right} else {moveto 1 top};background black;delay 0.1;background white')">moveto</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/caffeine.mol;set echo top center;delay 1.0;echo caffeine;delay 1.0;set selectionhalos on;select _O;echo oxygen;delay 1.0;select _N;echo nitrogen;delay 1.0; select none;echo hover over an atom')">delay/hover</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'var x=antialiasDisplay;load data/cyclohexaneFlip.jmol;antialiasdisplay = x;animation mode palindrome;animation on')">animation</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/c6h6.smol -3;rotate x 30;spin on;vibration on')">spin/vibration</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/co2.smol;mo homo SQUARED')">mo homo SQUARED</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/1hxw.png')">load data/1hxw.png</a> (<a target=_blank href=data/1hxw.png>image</a>)
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/square_planar.spartan')">load data/square_planar.spartan</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/water.xyz.gz')">load data/water.xyz.gz</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'load data/no2_nbo.log.gz')">load data/no2_nbo.log.gz</a>
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'zap;pmesh &quot;data/sage.pmesh&quot; fullylit;')">pmesh "data/sage.pmesh"</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'data/caffeine.mol')">load data/caffeine.mol</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'data/caffeine.mol',';isosurface &quot;data/caffeine.jvxl&quot;')">isosurface "caffeine.jvxl"</a>
 <br />
 <a href="javascript:Jmol.loadFile(jmolApplet0,'data/1crn.pdb',';if (_is2D) {set hermitelevel 0} else {set hermitelevel 6;set ribbonAspectRatio 4};cartoons only;color structure;')">load data/1crn.pdb</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'data/k04041.cif','load &quot;&quot; {1 1 1}')">load data/k04041.cif {1 1 1}</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'data/cl2o.gamess')">load data/cl2o.gamess</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'data/cl2o.gamess',';model 1.2;if (_is2D){mo mesh nofill} else {mo fill nomesh};mo homo')">(load +) mo homo</a>
 <br /> 
 <a href="javascript:Jmol.script(jmolApplet0,'model 1.2;mo fill nomesh;	mo lumo')">mo lumo</a>
 <a href="javascript:Jmol.script(jmolApplet0,'mo mesh nofill')">mesh</a>
 <a href="javascript:Jmol.script(jmolApplet0,'mo fill nomesh')">fill</a>
 <br />
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage [0 0];set echo myimage depth 50; set echo myimage image &quot;data/bob.png&quot;')">image</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage scale 0.5')">x 0.5</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage scale 1.0')">x 1.0</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage scale 2.0')">x 2.0</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage off')">off</a>         
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage image &quot;data/bob.png&quot;;set echo myimage depth 50')">on</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage depth 100')">front</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage depth 50')">mid</a>
 <a href="javascript:Jmol.script(jmolApplet0,'set echo myimage depth 0')">back</a>
 <br />
 <br />
 <a href="javascript:Jmol.script(jmolApplet0,'script data/cyclflip2.spt')">cyclflip2.spt</a>
 <a href="javascript:Jmol.script(jmolApplet0,'!quit')">!quit</a>
 <br /> 
 <br /> 

 </td><td valign=top>
	<b>direct database calls(<a href="javascript:alert('MSIE cannot do synchronous cross-domain file transfer, so if you want to do that, you must put jsmol.php on your OWN server and point to it using Info.serverURL, which for this page is ' + Info.serverURL + '\nA text version of this php file is at http://chemapps.stolaf.edu/jmol/jsmol/php/jsmol.php.txt')">unless MSIE</a>)</b>
 <br />
 <a href="javascript:Jmol.loadFile(jmolApplet0,'$caffeine')">load $caffeine (from NCI)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'=1blu',';display not water;select protein or nucleic;cartoons only;color structure;select *')">load =1blu (from RCSB)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'=1d66',';display not water;select protein or nucleic;cartoons only;color structure;select *')">load =1d66 (from RCSB)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'=4tra',';display not water;select protein or nucleic;cartoons only;color structure;select *')">load =4tra (from RCSB)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,':1983')">load :1983 (PubChem CID)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,':aspirin')">load :aspirin (PubChem name)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,':smiles:CC/C=C/CC')">load :smiles:CC/C=C/CC (PubChem SMILES)</a>
 <br />
 <a href="javascript:Jmol.loadFile(jmolApplet0,'$CC/C=C/CC')">load $CC/C=C/CC (NCI SMILES)</a>
 <br />
 <a href="javascript:Jmol.search(jmolApplet0,':caffeine',';isosurface vdw map mep translucent')">load :caffeine (PubChem, with mep)</a>
 <br /> 
 <a href="javascript:Jmol.search(jmolApplet0,'$caffeine',';moveto /* time, axisAngle */ 0.0 { -18 -17 1000 179.69} /* zoom, translation */  100.0 0.0 0.0  /* center, rotationRadius */ {-0.44874999999999954 0.18930000000000002 -0.06529999999999997} 5.536731293601459 /* navigation center, translation, depth */ {0 0 0} -4.041090898432742 -1.7041175988342825 0;calculate partialCharge;isosurface vdw map mep translucent')">load $caffeine (NCI, with MMFF94 mep)</a>
 <br /> 
 <a href="javascript:Jmol.loadFile(jmolApplet0,'==HEM')">load ==HEM (RCSB ligand)</a>

</td></tr></table>
</td>
</tr></table>		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
