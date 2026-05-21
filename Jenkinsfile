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
                sh 'sudo mkdir -p /var/www/html/cv_site'
                sh 'sudo cp -r backend/* /var/www/html/cv_site/'
                sh 'sudo systemctl reload apache2'
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
