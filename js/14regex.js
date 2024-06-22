// ################## Character Classes

// Any character except newline
let anyChar = "Hello! How are you? \n I'm fine.";
console.log(anyChar.match(/./g)); // Matches each character except newline

// Word, digit, whitespace
let wdws = "Hello123_ 456";
console.log(wdws.match(/\w/g)); // Matches all word characters [H,e,l,l,o,1,2,3,_]
console.log(wdws.match(/\d/g)); // Matches all digits [1,2,3,4,5,6]
console.log(wdws.match(/\s/g)); // Matches all whitespace characters [" "]

// Not word, digit, whitespace
console.log(wdws.match(/\W/g)); // Matches non-word characters [" "]
console.log(wdws.match(/\D/g)); // Matches non-digit characters [H,e,l,l,o, ,_ ]
console.log(wdws.match(/\S/g)); // Matches non-whitespace characters [H,e,l,l,o,1,2,3,4,5,6]

// Any of a, b, or c
let abcMatch = "apple banana cherry";
console.log(abcMatch.match(/[abc]/g)); // Matches [a,b,a,a,a,c]

// Not a, b, or c
console.log(abcMatch.match(/[^abc]/g)); // Matches all characters except a, b, or c [p,p,l,e, ,n,n,n, ,h,e,r,r,y]

// Character between a & g
console.log(abcMatch.match(/[a-g]/g)); // Matches [a,a,e,a,a,a,c,e,e]

// ################## Anchors

// Start / end of the string
let anchor = "abc";
let anchor2 = "abc bcd abc apple";
let anchor3 = "abc bcd abc apple abc";
console.log(/^abc$/.test(anchor)); // true, exact match from start to end
console.log(anchor2.match(/^abc/g)); // matches abc of start
console.log(anchor2.match(/abc$/g)); // no match
console.log(anchor3.match(/abc$/g)); // matches abc of end

// Word, not-word boundary
let boundary = "hello world";
console.log(boundary.match(/\bworld\b/)); // Matches ["world"]
console.log(boundary.match(/\Bworld\B/)); // No match as "world" is not surrounded by word characters

// ################## Escaped Characters
// Escaped special characters
let escaped = "The dot is here.";
console.log(escaped.match(/\./g)); // Matches ["."]
let star = "Star*";
console.log(star.match(/\*/g)); // Matches ["*"]
let backslash = "Backslash\\";
console.log(backslash);
console.log(backslash.match(/\\/g)); // Matches ["\\"]
console.log(backslash.match(/\\/g)[0]); // Matches ["\\"]

// Tab, linefeed, carriage return
let specialChars = "Tab\tLinefeed\nCarriage Return\r";
console.log(specialChars.match(/\t/)); // Matches ["\t"]
console.log(specialChars.match(/\n/)); // Matches ["\n"]
console.log(specialChars.match(/\r/)); // Matches ["\r"]

// ######################  Groups & Lookaround
// Capture group
let group = "I have an apple.";
console.log(group.match(/(apple)/)); // Matches ["apple", "apple"]

// Backreference to group #1
let backreference = "apple apple";
console.log(backreference.match(/(apple)\s\1/)); // Matches ["apple apple"]

// Non-capturing group
let nonCapturing = "redapple";
console.log(nonCapturing.match(/(?:red)apple/)); // Matches ["redapple"]

// Positive lookahead
let lookahead = "I have 100 dollars.";
console.log(lookahead.match(/\d+(?= dollars)/)); // Matches ["100"]

// Negative lookahead
let negLookahead = "I have 100 euros.";
console.log(negLookahead.match(/\d+(?! dollars)/)); // Matches ["100"]

// ########################### Quantifiers & Alternation
// 0 or more, 1 or more, 0 or 1
let quantifiers = "aa a aaa aaaa";
console.log(quantifiers.match(/a*/g)); // Matches ["aa"," ","a"," ","aaa"," ","aaaa",""]
console.log(quantifiers.match(/a+/g)); // Matches ["aa","a","aaa","aaaa"]
console.log(quantifiers.match(/a?/g)); // Matches ["a","a","","a"," ","a","","a","a","","a","a","a","a","a",""]

// Exactly five, two or more
let exact = "aaaaa aaaaaa";
console.log(exact.match(/a{5}/g)); // Matches ["aaaaa","aaaaa"]
console.log(exact.match(/a{2,}/g)); // Matches ["aaaaa","aaaaaa"]

// Between one & three
let range = "a aa aaa aaaa";
console.log(range.match(/a{1,3}/g)); // Matches ["a","aa","aaa","aaa"]

// Match as few as possible
let minimal = "aaaaaa";
console.log(minimal.match(/a+?/g)); // Matches ["a","a","a","a","a","a"]
console.log(minimal.match(/a{2,}?/g)); // Matches ["aa","aa","aa"]

// Match ab or cd
let alternation = "abc ab cd";
console.log(alternation.match(/ab|cd/g)); // Matches ["ab","ab","cd"]
