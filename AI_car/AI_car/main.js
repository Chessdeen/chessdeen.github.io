/*
MIT License

Copyright (c) 2022 Adeola Mubarak

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
© 2022 GitHub, Inc.
*/
document.getElementById('carCount').value=
    localStorage.getItem("carCount") || 1;
document.getElementById('mutationAmount').value=
    localStorage.getItem("mutationAmount") || '0.5';

const carCanvas=document.getElementById("carCanvas");
carCanvas.width=200;
const networkCanvas=document.getElementById("networkCanvas");
networkCanvas.width=500;

const carCtx = carCanvas.getContext("2d");
const networkCtx = networkCanvas.getContext("2d");

const road=new Road(carCanvas.width/2,carCanvas.width*0.9);

const N=Number(document.getElementById('carCount').value);
const cars=generateCars(N);
let bestCar=cars[0];


if(!localStorage.getItem("beenHereBefore")){
    localStorage.setItem("beenHereBefore","true");
    localStorage.setItem("bestBrain",'{"levels":[{"inputs":[0.7134037395397386,0.4704391617329813,0,0,0],"outputs":[1,0,1,0,1,1],"biases":[-0.2857065784574137,0.15198050810320685,-0.13924253314793095,0.11578316440435818,-0.16178778119340148,-0.3000903730682978],"weights":[[-0.13515557540433842,0.07300698004528629,0.0040602602910803365,-0.06511672542187383,0.2351613353184897,-0.2012322725070096],[0.11375478789219415,0.19674169055322577,-0.10038853369062525,-0.08805459204957476,0.21925787393967702,0.15340538795108272],[0.006771304836725459,0.19973693546258126,-0.054730364561966574,-0.31855113026094745,-0.18011218120061373,-0.07367159677011853],[0.10788433228858771,-0.08604768151855152,-0.16601129743851203,-0.00019124113279275767,-0.2387343271874623,0.024133579587637094],[0.016549344407090646,0.07491472818610108,0.01776519928759422,0.061508369764843265,-0.22340799373690096,-0.04158178250497961]]},{"inputs":[1,0,1,0,1,1],"outputs":[1,1,1,0],"biases":[-0.06116069156441874,-0.0723274390864902,0.040602477018632524,0.36214587805918513],"weights":[[0.08902059474663654,-0.15740460212292795,-0.33036790341757627,-0.09502772355825113],[-0.025343350670927654,-0.3306790265709002,-0.015918008460683405,-0.3003507035765679],[0.3227266376583849,0.38057846051375693,0.18707727773028537,0.053444661926534916],[-0.2025644147140744,0.1184725671846302,-0.09069904024640596,-0.12430190885008531],[0.07527020196440684,-0.230469927588571,0.3007741658810536,0.22218297028978307],[-0.01361908920713352,0.16609276689516542,-0.09581290649261008,-0.039394098855477074]]}]}');
}
if(localStorage.getItem("bestBrain")){
    for(let i=0;i<cars.length;i++){
        cars[i].brain=JSON.parse(
            localStorage.getItem("bestBrain"));
        if(i!=0){
            NeuralNetwork.mutate(cars[i].brain,
                Number(document.getElementById('mutationAmount').value));
        }
    }
}

const traffic=[
    new Car(road.getLaneCenter(0),-100,30,50,"DUMMY",2,getRandomColor()),//1//
    new Car(road.getLaneCenter(2),-100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-300,30,50,"DUMMY",2,getRandomColor()),//2//
    new Car(road.getLaneCenter(2),-300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-400,30,50,"DUMMY",2,getRandomColor()),//3//
    
    new Car(road.getLaneCenter(0),-500,30,50,"DUMMY",2,getRandomColor()),//4//
    new Car(road.getLaneCenter(1),-500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-700,30,50,"DUMMY",2,getRandomColor()),//5//
    new Car(road.getLaneCenter(2),-700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-900,30,50,"DUMMY",2,getRandomColor()),//6//
    new Car(road.getLaneCenter(2),-900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-1100,30,50,"DUMMY",2,getRandomColor()),//7//
    new Car(road.getLaneCenter(2),-1100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-1300,30,50,"DUMMY",2,getRandomColor()),//8//
    new Car(road.getLaneCenter(2),-1300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-1500,30,50,"DUMMY",2,getRandomColor()),//9//
    new Car(road.getLaneCenter(2),-1500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-1700,30,50,"DUMMY",2,getRandomColor()),//10//
    new Car(road.getLaneCenter(1),-1700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-1900,30,50,"DUMMY",2,getRandomColor()),//11//
    new Car(road.getLaneCenter(1),-1900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-2100,30,50,"DUMMY",2,getRandomColor()),//12//
    
    new Car(road.getLaneCenter(2),-2200,30,50,"DUMMY",2,getRandomColor()),//13//
    
    new Car(road.getLaneCenter(0),-2300,30,50,"DUMMY",2,getRandomColor()),//14//
    new Car(road.getLaneCenter(2),-2300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-2500,30,50,"DUMMY",2,getRandomColor()),//15//
    new Car(road.getLaneCenter(1),-2500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-2700,30,50,"DUMMY",2,getRandomColor()),//11//
    new Car(road.getLaneCenter(2),-2700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-2900,30,50,"DUMMY",2,getRandomColor()),//12//
    new Car(road.getLaneCenter(2),-2900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-3100,30,50,"DUMMY",2,getRandomColor()),//13//
    new Car(road.getLaneCenter(2),-3100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-3300,30,50,"DUMMY",2,getRandomColor()),//14//
    new Car(road.getLaneCenter(0),-3300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-3500,30,50,"DUMMY",2,getRandomColor()),//15//
    new Car(road.getLaneCenter(2),-3500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-3700,30,50,"DUMMY",2,getRandomColor()),//16//
    new Car(road.getLaneCenter(1),-3700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-3900,30,50,"DUMMY",2,getRandomColor()),//17//
    new Car(road.getLaneCenter(1),-3900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-4100,30,50,"DUMMY",2,getRandomColor()),//18//
    new Car(road.getLaneCenter(2),-4100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-4300,30,50,"DUMMY",2,getRandomColor()),//19//
    new Car(road.getLaneCenter(0),-4300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-4500,30,50,"DUMMY",2,getRandomColor()),//20//
    new Car(road.getLaneCenter(2),-4500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-4700,30,50,"DUMMY",2,getRandomColor()),//21//
    new Car(road.getLaneCenter(1),-4700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-4900,30,50,"DUMMY",2,getRandomColor()),//22//
    new Car(road.getLaneCenter(1),-4900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-5100,30,50,"DUMMY",2,getRandomColor()),//23//
    
    new Car(road.getLaneCenter(0),-5300,30,50,"DUMMY",2,getRandomColor()),//24//
    new Car(road.getLaneCenter(2),-5300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-5500,30,50,"DUMMY",2,getRandomColor()),//25//
    new Car(road.getLaneCenter(2),-5500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-5700,30,50,"DUMMY",2,getRandomColor()),//26//
    new Car(road.getLaneCenter(1),-5700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-5900,30,50,"DUMMY",2,getRandomColor()),//27//
    new Car(road.getLaneCenter(1),-5900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(2),-6100,30,50,"DUMMY",2,getRandomColor()),//28//
    
    new Car(road.getLaneCenter(0),-6300,30,50,"DUMMY",2,getRandomColor()),//29//
    new Car(road.getLaneCenter(2),-6300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-6500,30,50,"DUMMY",2,getRandomColor()),//30//
    new Car(road.getLaneCenter(1),-6500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-6700,30,50,"DUMMY",2,getRandomColor()),//31//
    new Car(road.getLaneCenter(2),-6700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-6900,30,50,"DUMMY",2,getRandomColor()),//32//
    new Car(road.getLaneCenter(2),-6900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-7100,30,50,"DUMMY",2,getRandomColor()),//33//
    new Car(road.getLaneCenter(2),-7100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-7300,30,50,"DUMMY",2,getRandomColor()),//34//
    new Car(road.getLaneCenter(0),-7300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-7500,30,50,"DUMMY",2,getRandomColor()),//35//
    
    new Car(road.getLaneCenter(0),-7700,30,50,"DUMMY",2,getRandomColor()),//36//
    new Car(road.getLaneCenter(2),-7700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-7900,30,50,"DUMMY",2,getRandomColor()),//37//
    
    new Car(road.getLaneCenter(2),-8100,30,50,"DUMMY",2,getRandomColor()),//38//
    new Car(road.getLaneCenter(0),-8100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-8300,30,50,"DUMMY",2,getRandomColor()),//39//
    new Car(road.getLaneCenter(2),-8300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(2),-8500,30,50,"DUMMY",2,getRandomColor()),//40//
    new Car(road.getLaneCenter(0),-8500,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-8700,30,50,"DUMMY",2,getRandomColor()),//41//
    new Car(road.getLaneCenter(0),-8700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(2),-8900,30,50,"DUMMY",2,getRandomColor()),//42//
    new Car(road.getLaneCenter(0),-8900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(1),-9100,30,50,"DUMMY",2,getRandomColor()),//43//
    new Car(road.getLaneCenter(2),-9100,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(2),-9300,30,50,"DUMMY",2,getRandomColor()),//44//
    new Car(road.getLaneCenter(0),-9300,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-9500,30,50,"DUMMY",2,getRandomColor()),//45//
    
    new Car(road.getLaneCenter(1),-9700,30,50,"DUMMY",2,getRandomColor()),//46//
    new Car(road.getLaneCenter(2),-9700,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(0),-9900,30,50,"DUMMY",2,getRandomColor()),//47//
    new Car(road.getLaneCenter(2),-9900,30,50,"DUMMY",2,getRandomColor()),
    
    new Car(road.getLaneCenter(2),-10100,30,50,"DUMMY",2,getRandomColor()),//48//
    
    new Car(road.getLaneCenter(2),-10300,30,50,"DUMMY",2,getRandomColor()),//49//
    
    new Car(road.getLaneCenter(1),-10500,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(0),-10500,30,50,"DUMMY",2,getRandomColor()),//50//
    
    new Car(road.getLaneCenter(2),-10700,30,50,"DUMMY",2,getRandomColor()),//51//
    
    new Car(road.getLaneCenter(0),-10900,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-10900,30,50,"DUMMY",2,getRandomColor()),//52//
    
    new Car(road.getLaneCenter(2),-11100,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(1),-11100,30,50,"DUMMY",2,getRandomColor()),//53//
    
    new Car(road.getLaneCenter(0),-11300,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-11300,30,50,"DUMMY",2,getRandomColor()),//54//
    
    new Car(road.getLaneCenter(0),-11500,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-11500,30,50,"DUMMY",2,getRandomColor()),//55//
    
    new Car(road.getLaneCenter(1),-11700,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-11700,30,50,"DUMMY",2,getRandomColor()),//56//
    
    new Car(road.getLaneCenter(0),-11900,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-11900,30,50,"DUMMY",2,getRandomColor()),//57//
    
    new Car(road.getLaneCenter(2),-12100,30,50,"DUMMY",2,getRandomColor()),//58//
    
    new Car(road.getLaneCenter(0),-12300,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-12300,30,50,"DUMMY",2,getRandomColor()),//59//
    
    new Car(road.getLaneCenter(0),-12500,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-12500,30,50,"DUMMY",2,getRandomColor()),//60//
    
    new Car(road.getLaneCenter(0),-12700,30,50,"DUMMY",2,getRandomColor()),//61//
    
    new Car(road.getLaneCenter(1),-12900,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-12900,30,50,"DUMMY",2,getRandomColor()),//62//
    
    new Car(road.getLaneCenter(2),-13100,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(0),-13100,30,50,"DUMMY",2,getRandomColor()),//63//
    
    new Car(road.getLaneCenter(2),-13300,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(0),-13300,30,50,"DUMMY",2,getRandomColor()),//64//
    
    new Car(road.getLaneCenter(2),-13500,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(1),-13500,30,50,"DUMMY",2,getRandomColor()),//65//
    
    new Car(road.getLaneCenter(1),-13700,30,50,"DUMMY",2,getRandomColor()),//66//
    
    new Car(road.getLaneCenter(0),-13900,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-13900,30,50,"DUMMY",2,getRandomColor()),//67//
    
    new Car(road.getLaneCenter(0),-14100,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(2),-14100,30,50,"DUMMY",2,getRandomColor()),//68//
    
    new Car(road.getLaneCenter(2),-14300,30,50,"DUMMY",2,getRandomColor()),//69//
    
    new Car(road.getLaneCenter(2),-14500,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(0),-14500,30,50,"DUMMY",2,getRandomColor()),//70//
    
    new Car(road.getLaneCenter(2),-14700,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(0),-14700,30,50,"DUMMY",2,getRandomColor()),//71//
    
    new Car(road.getLaneCenter(0),-14900,30,50,"DUMMY",2,getRandomColor()),
    new Car(road.getLaneCenter(1),-14900,30,50,"DUMMY",2,getRandomColor()),//72//
];

animate();

function save(){
    localStorage.setItem("bestBrain",
        JSON.stringify(bestCar.brain));
}

function discard(){
    localStorage.removeItem("bestBrain");
}

function generateCars(N){
    const cars=[];
    for(let i=1;i<=N;i++){
        cars.push(new Car(road.getLaneCenter(1),100,30,50,"AI"));
    }
    return cars;
}

function animate(time){
    for(let i=0;i<traffic.length;i++){
        traffic[i].update(road,[]);
    }
    for(let i=0;i<cars.length;i++){
        cars[i].update(road,traffic);
    }
    bestCar=cars.find(
        c=>c.fitness==Math.max(
            ...cars.map(c=>c.fitness)
        ));

    carCanvas.height=window.innerHeight;
    networkCanvas.height=window.innerHeight;

    carCtx.save();
    carCtx.translate(0,-bestCar.y+carCanvas.height*0.7);

    road.draw(carCtx);
    for(let i=0;i<traffic.length;i++){
        traffic[i].draw(carCtx);
    }
    carCtx.globalAlpha=0.2;
    for(let i=0;i<cars.length;i++){
        cars[i].draw(carCtx);
    }
    carCtx.globalAlpha=1;
    bestCar.draw(carCtx,true);

    carCtx.restore();

    networkCtx.lineDashOffset=-time/50;
    Visualizer.drawNetwork(networkCtx,bestCar.brain);
    requestAnimationFrame(animate);
}