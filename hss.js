const boxes = document.querySelectorAll('.box');
    boxes.forEach(box => {
        box.addEventListener('click', function() {
            const content = this.getAttribute('data-text');
            if(content=="Exam preperation")
            {
            	window.location.href = "./examprep.html";
            }
            if(content=="Quiz Time")
            {
            	window.location.href = "branch.html";
            }
			if(content=="Knowledge Center")
            {
            	window.location.href = "notes.html";
            }
			if(content=="Notes Upload")
            {
            	window.location.href = "up.html";
            }
			if(content=="Future scope")
            {
            	window.location.href = "scopefinder.html";
            }
            
        });
    });