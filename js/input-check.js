class InputValaided {
    constructor (ele) {
        this.eleTag =  document.querySelector(ele)
    }
    length(ele, num)  {
        let eleTag = document.querySelector(ele);
        eleTag.addEventListener("input", function() {
            if (eleTag.value.length == num) console.log("theis equal num" + num);
            else console.log("not equal the num" + num);
        })
    }
    isEmpty(ele, num) {
        let eleTag = document.querySelector(ele);
        if (this.eleTag.value.length == 0) console.log("is empty");
        else console.log("not empty");
        eleTag.addEventListener("input", () => {
            if (this.eleTag.value.length == 0) console.log("is empty");
            else console.log("not empty");

        })
    }
}

let c = new InputValaided("#test");
// c.length("#test", 4);
c.isEmpty("#test", 4);
console.log(c.eleTag);

let strOne = "elzero";
let strTow = new String("elzero");

