

// Create a scene, camera, and renderer as you've already done
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
const renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.querySelector(".box resizer").appendChild(renderer.domElement);

// Instantiate FBXLoader
const loader = new THREE.GLTFLoader(); // Using THREE.GLTFLoader directly
console.log(loader); // Logging the instance of FBXLoader

// Load the FBX model
loader.load(
    'assets/BOX.gltf',
    (fbx) => {
        scene.add(fbx);
    },
    (xhr) => {
        console.log((xhr.loaded / xhr.total * 100) + '% loaded');
    },
    (error) => {
        console.error('An error happened', error);
    }
);

// Add lights, controls, etc. as needed
const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(ambientLight);

const directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
directionalLight.position.set(10, 10, 10);
scene.add(directionalLight);

// You may want to update the camera aspect ratio on window resize
window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});
