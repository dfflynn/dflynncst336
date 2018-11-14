//closure javascript

var print = function() {
    
    var end = "";
    var space;
    for (var argue in arguments) {
        if(argue == 0) {
            space = arguments[argue];
            continue;
        }
        end += arguments[argue];
        end += space;
    }
    console.log(end);
    
}

print(" ", "something", "else");