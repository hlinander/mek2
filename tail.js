renderMathInElement(document.body,{ delimiters: [
  {left: "$", right: "$", display: false},
  {left: "\\[", right: "\\]", display: true},
  {left: "\\(", right: "\\)", display: false}
]  } );
document.getElementById("mydoc").addEventListener("dblclick", function(){
    location.reload();
});

