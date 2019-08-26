int a=8; //left sensor
int b=11; // right sensor
int c=1; //left motor1 
int d=2; //let motor2
int e=5; //right motor2
int f=4; //right motor1
void setup() {
  Serial.begin(9600);
  pinMode(1,OUTPUT);
  pinMode(4,OUTPUT);
  pinMode(2,OUTPUT);
  pinMode(5,OUTPUT);
  pinMode(11,INPUT);
  pinMode(8,INPUT);
  // put your setup code here, to run once:
}

void loop() {
  
  if((digitalRead(a)==HIGH)&&(digitalRead(b)==HIGH)){ //forward
    digitalWrite(1,HIGH);
    digitalWrite(4,HIGH);
    digitalWrite(2,LOW);
    digitalWrite(5,LOW);
  }
   if((digitalRead(a)==LOW)&&(digitalRead(b)==HIGH)){ //LEFT
    digitalWrite(1,LOW);
    digitalWrite(4,HIGH);
    digitalWrite(2,HIGH);
    digitalWrite(5,LOW);
  }
   if((digitalRead(a)==HIGH)&&(digitalRead(b)==LOW)){ //RIGHT                                                     
      digitalWrite(1,HIGH);
    digitalWrite(4,LOW);
    digitalWrite(2,LOW);
    digitalWrite(5,HIGH);
    }
   if((digitalRead(a)==LOW)&&(digitalRead(b)==LOW)){ //stop
       digitalWrite(1,LOW);
    digitalWrite(4,LOW);
    digitalWrite(2,LOW);
    digitalWrite(5,LOW);
 }
}
