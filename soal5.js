function matrix(m, n) {
    var result = []
    for(var i = 0; i < n; i++) {
        result.push(new Array(m).fill(Math.floor(Math.random() * 99)))
    }
    return result
}
console.log(matrix(3,3))
