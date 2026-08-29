pipeline {
    agent any

    environment {
        DOCKER_HOST = 'npipe:////./pipe/dockerDesktopLinuxEngine'
    }

    stages {
        stage('Docker Context Test') {
            steps {
                bat '''
                    echo ===== DOCKER CONTEXT =====
                    docker context show

                    echo ===== DOCKER VERSION =====
                    docker --version

                    echo ===== DOCKER INFO =====
                    docker info
                '''
            }
        }
    }
}