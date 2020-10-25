<!DOCTYPE html>
<!-- exp. https://edutekno.net/ar/?glb=https://edutekno.github.io/glb/object.glb  -->
<html>
<head>
<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
$glb="";$obj="";$mtl="";
echo $glb=$_GET['glb'];
$obj=$_GET['obj'];
$mtl=$_GET['mtl'];

?>

 <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
  </head>
  <body>
<a-scene>
<a-assets>
<?php if (strlen($glb)> 4){?>
<a-asset-item id="glbmodel" response-type="arraybuffer" src="<?php echo $glb;?>"></a-asset-item>
<?php }?>
</a-assets>

<a-entity gltf-model="#glbmodel" position="-0 0 -2" scale="1 1 1" animation-mixer="clip:mixamo.com; loop:2; timeScale: 2; crossFadeDuration: 1"></a-entity>

</a-scene>
    
    
<a-entity position="0 0 1">
<a-camera user-height="1" >
<a-cursor fuse=true fuseTimeout="2000" ></a-cursor>
</a-camera></a-entity>

    
  </body>
</html>
