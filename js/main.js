function voteFunc() {
    if (document.getElementById("candidate-1").value === "mexico" && document.querySelector('input[id="candidate-1"]:checked') !== null) {
        let mexico_add = parseInt(document.getElementById("Mexico").innerText);
        document.getElementById("Mexico").innerText = mexico_add + 1;
    }
    else if (document.getElementById("candidate-2").value === "brazil" && document.querySelector('input[id="candidate-2"]:checked') !== null) {
        let brazil_add = parseInt(document.getElementById("Brazil").innerText);
        document.getElementById("Brazil").innerText = brazil_add + 1;
    }
    else if (document.getElementById("candidate-3").value === "peru" && document.querySelector('input[id="candidate-3"]:checked') !== null){
        let peru_add = parseInt(document.getElementById("Peru").innerText);
        document.getElementById("Peru").innerText = peru_add + 1;
    }
    else if (document.getElementById("candidate-4").value === "india" && document.querySelector('input[id="candidate-4"]:checked') !== null){
        let india_add = parseInt(document.getElementById("India").innerText);
        document.getElementById("India").innerText = india_add + 1;
    }
    else if (document.getElementById("candidate-5").value === "dominican_republic" && document.querySelector('input[id="candidate-5"]:checked') !== null){
        let domrep_add = parseInt(document.getElementById("Dominican_Republic").innerText);
        document.getElementById("Dominican_Republic").innerText = domrep_add + 1;
    }
    else {
        return null;
    }
}

