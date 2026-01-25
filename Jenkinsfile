// SUPER SIMPLE VERSION - Copy this exactly
pipeline {
    agent any
    
    stages {
        // Stage 1: Get code from GitHub
        stage('Get Code') {
            steps {
                echo '📥 Getting code from GitHub...'
                git 'https://github.com/alexlawtengyi6-bit/demo_jenkins.git'
            }
        }
        
        // Stage 2: Install PHP tools
        stage('Install Tools') {
            steps {
                echo '📦 Installing PHP tools...'
                sh 'composer install'
            }
        }
        
        // Stage 3: Check PHP syntax
        stage('Check Syntax') {
            steps {
                echo '✅ Checking PHP syntax...'
                sh 'php -l index.php'
                sh 'php -l tests/SimpleTest.php'
            }
        }
        
        // Stage 4: Run tests
        stage('Run Tests') {
            steps {
                echo '🧪 Running tests...'
                sh './vendor/bin/phpunit tests/SimpleTest.php'
            }
        }
        
        // Stage 5: Show success
        stage('Success') {
            steps {
                echo '🎉 Everything worked!'
                echo 'Your PHP app is ready!'
            }
        }
    }
    
    // What happens after pipeline
    post {
        always {
            echo '🏁 Pipeline finished!'
        }
        success {
            echo '✅ SUCCESS! All tests passed!'
        }
        failure {
            echo '❌ FAILED! Check the errors above.'
        }
    }

}
