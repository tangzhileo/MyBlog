pipeline {
    agent {
        docker {
            image 'maven:3.3.3'
        }
    }
    stages {
        stage('Build') {
            steps {
                sh 'mvn -version'
            }
        }
        stage('Test') {
            steps {
                sh 'echo "Run test"'
            }
            post {
                always {
                    sh 'echo "Test post"'
                }
            }
        }
        stage('Deliver') { 
            steps {
                sh 'echo "Run deliver"' 
            }
        }
    }
}
