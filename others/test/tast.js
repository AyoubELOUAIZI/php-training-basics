function getrundemNumber(x) {
    return Math.floor(Math.random() * x);
}


function print(x) {
    document.getElementById("b1").innerHTML += x;
}


function main() {
    // grogramTenNombers();
    // game();
    // tableMaltiplecation();
    // calculateMoyenne();
    // virefyingPassword();
}

function virefyingPassword() {
    let pass1 = document.getElementById("pass1").value();
    alert(pass1);
    console.log("wwwwwwwwwwww");

}

function calculateMoyenne() {
    let N = prompt("enter a number ");
    if (N < 0) {
        alert("le nomber est negative");
        return;
    }
    let some = 0;
    let nums = [];
    for (let i = 0; i < N; i++) {
        nums[i] = prompt("donner le nomber " + (i + 1) + ":");
        some += parseInt(nums[i]);
    }

    let moyen = some / N;
    document.getElementById("b1").innerHTML = moyen;
    document.getElementById("b1").innerHTML += "les elements superieur a moyen est:"
    for (let i = 0; i < nums.length; i++) {
        if (nums[i] > moyen)
            document.getElementById("b1").innerHTML += " " + nums[i];
    }

}



function tableMaltiplecation() {
    let N = prompt("enter a number enter 0 et 10");
    if (N > 10) {
        alert("le nomber depasse 10");
        return;
    }
    let tab = document.getElementById("tb1");
    for (let i = 0; i < N; i++) {
        let row = tab.insertRow();

        for (let j = 0; j < N; j++) {
            let cell = row.insertCell();
            cell.innerHTML = (j + 1) * (i + 1);
            if (estPair((j + 1) * (i + 1))) {
                cell.style.background = "red";
            }
        }
    }

}
function estPair(x) {
    if (x % 2) return false;
    return true;
}
function grogramTenNombers() {
    let count = 0;
    for (var i = 1; i <= 50; i++) {
        if (estPair(i)) {
            document.getElementById("b1").innerHTML += i + " ";
            count += 1;
            if (count == 10) {
                document.getElementById("b1").innerHTML += "<br>";
                count = 0;

            }
        }
    }
}



function game() {
    let num = getrundemNumber(11);
    usernum = prompt("enter number betwin 0 and 10");
    let count = 1;
    while (num != usernum) {
        if (usernum < num) {
            usernum = prompt("nomber tres petite");
        } else if (usernum > num) {
            usernum = prompt("nomber tres grand");
        }
        count += 1;
    }
    alert("good job tu a ponse " + count + " fois.");
}




//  < script >
//     function check() {
//         let t1 = ['C', 'A', 'D', 'B'];
//         let t2 = ['A', 'D', 'C', 'B'];
//         if (t1.sort().toString() != t2.sort().toString()) {
//             console.log("egal");
//         } else {
//             console.log("not egal");
//         }
//     }
//     </script > 