function getCounts(string) {
    
    const histogram = {};
    for (let i in string){
        const ch = string[i];
        histogram[ch] = ( histogram[ch] || 0) + 1
    }
    return histogram;
}

// // input sesuai masukkan!!

// console.log(getCounts("hari apa saja saya bisa!")); 
// console.log(getCounts("cepat kerjakan!!!")); 
