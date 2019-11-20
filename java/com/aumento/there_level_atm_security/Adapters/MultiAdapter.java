package com.aumento.there_level_atm_security.Adapters;


import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;


import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import com.aumento.there_level_atm_security.R;
import com.aumento.there_level_atm_security.pogo.multi;

import java.util.ArrayList;

/**
 * Created by MyPc on 04-10-2017.
 */

public class MultiAdapter extends RecyclerView.Adapter<MultiAdapter.ItemViewHolder> {

    private Context mcontext;
    private ArrayList<multi> arrayList;


    public MultiAdapter(Context mcontext, ArrayList<multi> arrayList) {
        this.mcontext = mcontext;
        this.arrayList = arrayList;
    }



    @Override
    public ItemViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        LayoutInflater layoutInflater= LayoutInflater.from(parent.getContext());
        View view=layoutInflater.from(parent.getContext()).inflate(R.layout.raw_input_multi_item,parent,false);
        ItemViewHolder itemViewHolder= new ItemViewHolder(view);
        return  itemViewHolder;
    }

    @Override
    public void onBindViewHolder(ItemViewHolder holder, int position) {

        final multi item = arrayList.get(position);

        holder.accno.setText(item.getAccno());
        holder.amount.setText(item.getAmount());
        holder.datee.setText(item.getDate());
        holder.pin.setText(item.getPins());

    }

    @Override
    public int getItemCount() {
        if (arrayList != null) {
            return arrayList.size();

        }

        return 0;
    }

    public static class ItemViewHolder extends RecyclerView.ViewHolder{


        public CardView cardView;
        public TextView accno;
        public TextView amount;
        public TextView pin;
        public TextView datee;

        public ItemViewHolder(View itemView) {
            super(itemView);

            cardView=(CardView)itemView.findViewById(R.id.mcard_sview);
            accno=(TextView)itemView.findViewById(R.id.m_accno);
            amount=(TextView)itemView.findViewById(R.id.m_amount);
            pin=(TextView)itemView.findViewById(R.id.m_pin);
            datee=(TextView)itemView.findViewById(R.id.m_date);






        }
    }


}
