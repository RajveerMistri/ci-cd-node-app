pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo 'Checking out source code...'
            }
        }

        stage('Build') {
            steps {
                echo 'Building Node.js application...'
            }
        }

        stage('Docker Build') {
            steps {
                echo 'Building Docker image...'
            }
        }

        stage('Test') {
            steps {
                echo 'Running tests...'
            }
        }
    }
}