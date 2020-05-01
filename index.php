<!DOCTYPE html>
<html>  
  <head>
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
    <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  </head>  
  <body>
    <a-scene embedded arjs>
      <!--a-entity scale=".2 .2 .2"> 
        <a-entity gltf-model="model.gltf" scale="0.8 0.8 0.8" crossOrigin="anonymous">
        </a-entity-->
      <a-assets>
        <a-asset-item id="obj" src="obje.obj"></a-asset-item>
      </a-assets>

      <a-entity obj-model="obj: #obj" position="1 -1 -30">
        <a-animation attribute="rotation" dur="12000" easing="linear" repeat="indefinite"
                     to="0 360 0"></a-animation>
      </a-entity>
        <a-marker-camera preset='hiro'></a-marker-camera>
        </a-scene>
      </body>
    </html>