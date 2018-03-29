package id.septiyadii.accessmodifier.function;

import android.content.Context;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.Toast;

public class MyFunction extends AppCompatActivity {

    Context context;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        context = MyFunction.this;

    }

    public void MyToas(String isipesan) {
        Toast.makeText(context, isipesan, Toast.LENGTH_LONG).show();
    }
}
