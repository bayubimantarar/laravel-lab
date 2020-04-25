pipeline {
    agent any 
    stages {
        stage('Build') {
            agent {
                docker {
                    image 'composer:latest'
                }
            }
            steps {
                sh 'echo Build laravel project'
            }
        }
        stage('Test') { 
            steps {
                sh 'echo Test laravel project'
                sh './vendor/bin/phpunit'
            }
        }
    }
}
