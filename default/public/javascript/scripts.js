Book = Backbone.Model.extend({
    initialize: function(){
        this.on("change", function(){
            console.log('Model Change');
            console.log('Changed attributes: ' + JSON.stringify(this.changed));
            if(this.hasChanged("name")){
                console.log('The Name has Change');
            }
        });
    },
    defaults:{
        name: 'Book Title',
        author: 'No One'
    },

    printDetails: function(){
        console.log(this.get('name') + ' by ' + this.get('author'));
    }
});

var thisBook = new Book({name: 'Beginning Backbone',
                         author:'James Sugrue'});

console.log(thisBook.attributes);

thisBook.set('name', 'Different Book'); //change handler invoked
thisBook.set('name', 'Different Book', {silent:true});//no change handler invoked

/*
Book = Backbone.Model.extend({
    initialize: function(){
        console.log('a new Book');
    },
    
    defaults:{
        name: 'Book Title',
        author: 'No One'
    },
    
    printDetails: function(){
        console.log(this.get('name') + ' by ' + this.get('author'));
    }
});

var myBook = new Book();
console.log(myBook.get('name'));



var thisBook = new Book({name: 'Beginning Backbone',
                         author:'James Sugrue'});

console.log(thisBook.attributes);

thisBook.printDetails();

thisBook.set('year', 2013);

console.log(thisBook.attributes);

thisBook.unset('year');

console.log('Book year ' + thisBook.get('year'));

var hasYear = thisBook.has('year'); //results in false
var hasName = thisBook.has('name'); //results in true
console.log('Has an attribute called year  : ' + hasYear);
console.log('Has an attribute called name  : ' + hasName);

var newBook = new Book({name: 'Another Book', author: 'You'});
newBook.clear();//remove all attributes
console.log('Has an attribute called name  : ' + newBook.has('name'));//results in false

*/

