pipeline {
    agent any

    stages {

        stage('Docker Login Test') {
            steps {
                withCredentials([usernamePassword(
                    credentialsId: 'dockerhub-credentials',
                    usernameVariable: 'DOCKER_USERNAME',
                    passwordVariable: 'DOCKER_PASSWORD'
                )]) {

                    bat '''
                        echo Docker username: %DOCKER_USERNAME%
                        docker logout
                        echo %DOCKER_PASSWORD% | docker login -u "%DOCKER_USERNAME%" --password-stdin
                    '''
                }
            }
        }
    }
}