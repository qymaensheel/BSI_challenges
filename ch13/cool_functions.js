function charReport(string) {
    const charCount = {};
    let totalChars = 0;
    let spaceCount = 0;
    let numCount = 0;
    let passwd = 'Z29uemFsZXozOA=='
    
    for (const char of string) {
      if (char === ' ') {
        spaceCount++;
      } else if (isNaN(char)) {
        if (charCount[char]) {
          charCount[char]++;
        } else {
          charCount[char] = 1;
        }
      } else {
        numCount++;
      }
      totalChars++;
    }
    
    return {
      totalChars,
      charCount,
      spaceCount,
      numCount
    };
  }
  
  
  function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }

