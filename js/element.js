
function handleMouseMove(event) {
	const height = window.innerHeight;
	const width = window.innerWidth;
	// Creates angles of (-20, -20) (left, bottom) and (20, 20) (right, top)
	const yAxisDegree = event.pageX / width * 40 - 20;
	const xAxisDegree = event.pageY / height * -1 * 40 + 20;
	target.style.transform = `rotateY(${yAxisDegree}deg) rotateX(${xAxisDegree}deg)`;
	// Set the sheen position
	setSheenPosition(event.pageX / width, event.pageY / width);
  }


  function setSheenPosition(xRatio, yRatio) {
	// This creates a "distance" up to 400px each direction to offset the sheen
	const xOffset = 1 - (xRatio - 0.5) * 800;
	const yOffset = 1 - (yRatio - 0.5) * 800;
	target.style.setProperty('--sheenX', `${xOffset}px`)
	target.style.setProperty('--sheenY', `${yOffset}px`)
  }




  // ouverture bloc de contenu
  (function(){
	let project = document.getElementsByClassName("petitconteneur17")
	let close = document.getElementsByClassName("close")
	let descOuvert = false
	for(const projects of project){
		projects.addEventListener("click", function(event){
			console.log(event.target.id)
			if(!descOuvert){
				let target = event.target
				let id = 0
				if(target.parentElement.id){
					id = target.parentElement.id
					description(id)
				}
				else{
					id = target.parentElement.parentElement.id
					description(id)
				}
				descOuvert = true
			}
		})
	}
	

	for(const closes of close){
		closes.addEventListener("click", function(event){
			console.log("jbvsb")
			let target = event.target
			let parent = target.parentElement
			parent.classList.remove("displayed")
			descOuvert = false
		})
	}
	}()
)	

function description(id){
	let desc = document.getElementById("desc-" + String(id))
	desc.classList.add("displayed")
}





//video
/*
$('#video1').mouseover(function(){
    $(this).get(0).play();
}).mouseout(function(){
    $(this).get(0).pause();
})*/