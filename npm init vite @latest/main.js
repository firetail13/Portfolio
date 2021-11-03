import './style.css'
import * as THREE from 'https://unpkg.com/three@0.126.1/build/three.module.js';
import vertexShader from './shaders/vertex.glsl'

/*document.querySelector('#app').innerHTML = `
  <h1>Hello Vite!</h1>
  <a href="https://vitejs.dev/guide/features.html" target="_blank">Documentation</a>
`*/


/*const app = document.querySelector<HTMLDivElement>('#app')!

app.innerHTML = `
  <h1>Hello Vite!ef</h1>
  <a href="https://vitejs.dev/guide/features.html" target="_blank">Documentation</a>
`*/

var renderer = new THREE.WebGLRenderer(
    {
      antialias: true
    });
  renderer.setSize( window.innerWidth, window.innerHeight );
  renderer.setPixelRatio(window.devicePixelRatio);

  document.body.appendChild( renderer.domElement );

  // create a Scene
  var scene = new THREE.Scene()
  var camera = new THREE.PerspectiveCamera(
      75,
      innerWidth / innerHeight,
      0.1,
      1000
    )

  const sphere = new THREE.Mesh(
    new THREE.SphereGeometry(5, 50, 50), 
    new THREE.ShaderMaterial({
     //vertexShader: ,
    //fragmentShader:
   })
  )

  scene.add(sphere)

  camera.position.z = 10

  function animate() {
  requestAnimationFrame(animate)
  renderer.render(scene, camera)
}

  animate();