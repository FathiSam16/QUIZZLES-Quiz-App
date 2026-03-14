// ========================================
// QUIZZLES - Quiz Questions Database
// js/quiz-data.js
// ========================================

const quizQuestions = {
    // EASY LEVEL QUESTIONS
    easy: [
        {
            question: "What is the capital city of France?",
            options: ["Paris", "Berlin", "Madrid", "Rome"],
            correct: 0
        },
        {
            question: "Which planet is known as the Red Planet?",
            options: ["Venus", "Mars", "Jupiter", "Saturn"],
            correct: 1
        },
        {
            question: "What is 2 + 2?",
            options: ["3", "4", "5", "6"],
            correct: 1
        },
        {
            question: "Which animal is known as the king of the jungle?",
            options: ["Tiger", "Elephant", "Lion", "Giraffe"],
            correct: 2
        },
        {
            question: "What color are apples?",
            options: ["Blue", "Red", "Green", "Red or Green"],
            correct: 3
        },
        {
            question: "How many days are in a week?",
            options: ["5", "6", "7", "8"],
            correct: 2
        },
        {
            question: "Which is the largest ocean on Earth?",
            options: ["Atlantic", "Indian", "Arctic", "Pacific"],
            correct: 3
        },
        {
            question: "What do bees produce?",
            options: ["Milk", "Honey", "Wax", "Honey and Wax"],
            correct: 3
        },
        {
            question: "How many letters are in the English alphabet?",
            options: ["24", "25", "26", "27"],
            correct: 2
        },
        {
            question: "Which season comes after summer?",
            options: ["Spring", "Winter", "Fall/Autumn", "Monsoon"],
            correct: 2
        }
    ],
    
    // MEDIUM LEVEL QUESTIONS
    medium: [
        {
            question: "What is the square root of 144?",
            options: ["10", "12", "14", "16"],
            correct: 1
        },
        {
            question: "Who wrote 'Romeo and Juliet'?",
            options: ["Charles Dickens", "William Shakespeare", "Jane Austen", "Mark Twain"],
            correct: 1
        },
        {
            question: "What is the chemical symbol for gold?",
            options: ["Go", "Gd", "Au", "Ag"],
            correct: 2
        },
        {
            question: "Which country is home to the kangaroo?",
            options: ["India", "Australia", "South Africa", "Brazil"],
            correct: 1
        },
        {
            question: "How many continents are there?",
            options: ["5", "6", "7", "8"],
            correct: 2
        },
        {
            question: "What is the hardest natural substance on Earth?",
            options: ["Gold", "Iron", "Diamond", "Platinum"],
            correct: 2
        },
        {
            question: "Who painted the Mona Lisa?",
            options: ["Van Gogh", "Picasso", "Da Vinci", "Michelangelo"],
            correct: 2
        },
        {
            question: "What is the largest mammal?",
            options: ["Elephant", "Blue Whale", "Giraffe", "Great White Shark"],
            correct: 1
        },
        {
            question: "How many players are in a soccer team?",
            options: ["9", "10", "11", "12"],
            correct: 2
        },
        {
            question: "What is the boiling point of water?",
            options: ["90°C", "100°C", "110°C", "120°C"],
            correct: 1
        }
    ],
    
    // HARD LEVEL QUESTIONS
    hard: [
        {
            question: "In what year did World War II end?",
            options: ["1943", "1945", "1948", "1950"],
            correct: 1
        },
        {
            question: "What is the speed of light?",
            options: ["299,792 km/s", "199,792 km/s", "399,792 km/s", "499,792 km/s"],
            correct: 0
        },
        {
            question: "Who developed the theory of relativity?",
            options: ["Newton", "Einstein", "Galileo", "Hawking"],
            correct: 1
        },
        {
            question: "What is the capital of Australia?",
            options: ["Sydney", "Melbourne", "Canberra", "Perth"],
            correct: 2
        },
        {
            question: "How many bones are in the adult human body?",
            options: ["206", "208", "210", "212"],
            correct: 0
        },
        {
            question: "Which element has the atomic number 1?",
            options: ["Oxygen", "Helium", "Hydrogen", "Carbon"],
            correct: 2
        },
        {
            question: "Who was the first person to step on the moon?",
            options: ["Buzz Aldrin", "Neil Armstrong", "Yuri Gagarin", "Michael Collins"],
            correct: 1
        },
        {
            question: "What is the longest river in the world?",
            options: ["Amazon", "Nile", "Yangtze", "Mississippi"],
            correct: 1
        },
        {
            question: "In which year did the Titanic sink?",
            options: ["1910", "1912", "1914", "1916"],
            correct: 1
        },
        {
            question: "What is the smallest prime number?",
            options: ["0", "1", "2", "3"],
            correct: 2
        }
    ]
};

// Make it available globally
window.quizQuestions = quizQuestions;

// Console message to confirm loading
console.log('✅ Quiz questions loaded successfully!');