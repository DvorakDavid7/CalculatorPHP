const submitBtn = document.querySelector("#submit-btn")
const resultElement = document.querySelector("#result");


async function postData (data) {
    const url = "/myweb/lib/CalculatorHandler.php"

    const response = await fetch(url, {
        method: "post",
        headers: {
            "Content-Type": "application/json",  // sent request
            "Accept":       "application/json"   // expected data sent back
        },
        body: JSON.stringify(data)
    });
    const responseData = await response.json();
    console.log(responseData);
    resultElement.innerText = responseData.result;
}


submitBtn.addEventListener("click", () => {
    let data = {
        operator: document.querySelector("#operator").value,
        num1: document.querySelector("[name=num1]").value,
        num2: document.querySelector("[name=num2]").value
    }
    console.log(data);
    postData(data)
})