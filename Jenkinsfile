pipeline {
    agent any

    stages {
        stage('Descargar código') {
            steps {
                checkout scm
            }
        }

        stage('Validar PHP') {
            steps {
                sh 'find backend/ -name "*.php" | xargs php -l'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                sh 'cp -r backend/* /var/www/html/cv_site/'
            }
        }
    }

    post {
        success {
            echo 'Pipeline completado correctamente'
        }
        failure {
            echo 'Pipeline fallido'
        }
    }
}
