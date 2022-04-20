let me = this;
$(document).ready(function(){
    let getGenerateInfo = $("a");
    for (let index = 0; index < getGenerateInfo.length; index++) {
        const element = $(getGenerateInfo[index]);
        let parentChildren = element.children().find("oId");
        for (let jIndex = 0; jIndex < parentChildren.length; jIndex++) {
            const child = $(parentChildren[jIndex]);
            if(child.hasClass("views")){
                let linkButton = child.attr("oId");
                console.log(linkButton);
                me[linkButton] = child;
            }                   
        }
    }        
});
