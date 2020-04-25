pipeline {
    agent any 
    stages {
        stage('Build') {
            steps {
                sh 'composer install'
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
