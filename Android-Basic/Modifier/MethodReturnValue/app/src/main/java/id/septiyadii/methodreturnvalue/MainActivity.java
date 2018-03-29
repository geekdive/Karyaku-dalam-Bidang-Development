package id.septiyadii.methodreturnvalue;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button btnAksesMethod1 = (Button)findViewById(R.id.btnAksesMethodBiasa);
        Button btnAksesMethod2 = (Button)findViewById(R.id.btnAksesMethodReturnValue);

        btnAksesMethod1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                MethodBiasa();
            }
        });

        btnAksesMethod2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                MethodReturnValue("Mengakses Method dengan Return Value");
            }
        });
    }

    //TODO 1: Method Biasa tanpa Value
    public void MethodBiasa(){
        Toast.makeText(this, "Mengakses Method Biasa dengan Button", Toast.LENGTH_LONG).show();
    }

    //TODO 2: Method dengan Return Value
    public void MethodReturnValue(String isipesan){
        Toast.makeText(this, isipesan, Toast.LENGTH_LONG).show();
    }
}
